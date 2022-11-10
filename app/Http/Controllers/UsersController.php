<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::select('id','name','email','created_at')
                 ->whereNull('deleted_at')
                 ->orderBy('id')
                 ->get();

        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('userのstore');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('users.index')
            ->with([
                'message' => 'ユーザが登録されました',
                'status' => 'info'
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd('userのedit');
        $user = User::findOrFail($id);

        return view('users.edit',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd('userのupdate',$id);
        // dd($cnt);

        $cnt = User::select('email')
                   ->where('id','<>', $id)
                   ->where('email','=', $request->email)
                   ->whereNull('deleted_at')
                   ->count();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if ($cnt > 0) {
            $request->validate([
                'email' => ['unique:users'],
            ]);
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        //チェックが入っている時だけ、パスワードを更新する
        if ($request->boolean('chk_password')) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()
            ->route('users.index')
            ->with([
                'message' => 'ユーザ情報を更新しました',
                'status' => 'info'
            ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete(); //ソフトデリート
        return redirect()
            ->route('users.index')
            ->with([
                'message' => 'ユーザ情報を削除しました',
                'status' => 'alert'
            ]);
    }

    // /**
    //  * 
    //  * テスト
    //  * 
    //  */
    // public function test()
    // {
    //     dd('usersのtestを実行');
    // }
}

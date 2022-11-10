<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    //

    public function index()
    {
        $promotions = Promotion::select('*')
                    ->whereNull('deleted_at')
                    ->get();

        return view('shops.index',compact('promotions'));
    }

    public function store(Request $request)
    {

        //プロモーション情報の更新
        $promotionCount = Promotion::get()->count();

        for ($i=1; $i<=$promotionCount; $i++) {
            $promotion = Promotion::find($i);
            // $promotionRadioName = 'promotion' . $i;
            $promotion->visible_flg = $request->boolean('chk_'.$i);
            $promotion->save();
        }

        return redirect()
            ->route('shops.index');

    }

}

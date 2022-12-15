<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\BuildingCampus;
use App\Models\BuildingFaculty;
use App\Models\BuildingGate;
use App\Models\BuildingPromotion;
use App\Models\BuildingPhoto;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Services\ImageService;
use Throwable;

use function PHPUnit\Framework\isNull;

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $uri = $request->url();
        $fulluri = $request->fullUrl();

        $substr = str_replace($uri,'',$fulluri);

        if ( $substr == "" ) {
            return view('buildings.index');
        } else {
            //クエリ文字が存在していたら、検索を行う
            $query = $request;
            
            // $search = Building:: select('buildings.*',DB::raw('COUNT(rooms.build_id) AS room_num'),DB::raw('COUNT(building_photos.build_id) AS photo_num'))
            $search_building = Building :: select('buildings.*',DB::raw('COUNT(rooms.build_id) AS room_num'),DB::raw('COUNT(building_photos.build_id) AS photo_num'))
            ->leftjoin('rooms','buildings.id', '=', 'rooms.build_id')
            ->leftjoin('building_photos','buildings.id', '=', 'building_photos.build_id')
            ->whereNull('buildings.deleted_at')
            ->whereNull('rooms.deleted_at')
            ->whereNull('building_photos.deleted_at');
            // ->get();
            // ->whereNull('rooms.deleted_at')

            // 物件No.の検索
            if (!empty($request->build_num )) {
            $search_building = $search_building
            -> where('buildings.build_num', 'like', '%'.$request->build_num.'%');
            }

            // 物件名の検索
            if (!empty($request->build_name )) {
            $search_building = $search_building
            -> where('buildings.build_name', 'like', '%'.$request->build_name.'%');
            }

            // 物件名カナの検索
            if (!empty($request->build_name_kana )) {
            $search_building = $search_building
            -> where('buildings.build_name_kana', 'like', '%'.$request->build_name_kana.'%');
            }

            // 物件所在地の検索
            if (!empty($request->address )) {
            $search_building = $search_building
            -> where('buildings.address1', 'like', '%'.$request->build_name_kana.'%')
            -> orWhere('buildings.address2', 'like', '%'.$request->build_name_kana.'%')
            -> orWhere('buildings.address3', 'like', '%'.$request->build_name_kana.'%');
            }

            // 外観写真MIN枚数の検索
            if (!empty($request->exterior_photo_min )) {
            $search_building = $search_building
            -> havingRaw('COUNT(building_photos.build_id) >= ?', [$request->exterior_photo_min]);
            }

            // 外観写真MAX枚数の検索
            if (!empty($request->exterior_photo_max )) {
            $search_building = $search_building
            -> havingRaw('COUNT(building_photos.build_id) <= ?', [$request->exterior_photo_max]);
            }

            // // 周辺写真MIN枚数の検索
            // if (!empty($request->build_num )) {
            //     $search_building = $search_building
            //                      -> havingRaw('buildings.naborhood_photo_min <= ?', [$request->naborhood_photo_max]);
            // }

            // // 周辺写真MAX枚数の検索
            // if (!empty($request->build_num )) {
            //     $search_building = $search_building
            //                      -> havingRaw('buildings.naborhood_photo_max >= ?', [$request->build_num]);
            // }

            // 部屋登録
            switch ($request->room) {
            case 2:
            $search_building = $search_building
                -> havingRaw('COUNT(rooms.build_id) > 0');
            break;

            case 3:
            $search_building = $search_building
                -> havingRaw('COUNT(rooms.build_id) = 0');
            break;

            default:
            break;
            }

            // 物件名カナの検索
            $search_building = $search_building
            ->GroupBy('buildings.id');

            // // 部屋登録
            // switch ($request->room) {
            //     case '2':
            //         $search_building = $search_building
            //                          -> havingRaw('COUNT(rooms.build_id) > 0');
            //         break;

            //     case '3':
            //         $search_building = $search_building
            //                          -> havingRaw('COUNT(rooms.build_id) = 0');
            //         break;

            //     default:
            //         break;
            // }

            $search_building = $search_building
            -> get();


            // dd($search_building, $request);

            // dd($serch_buildings);
            // SELECT buildings.*
            //     , COUNT(building_photos.build_id)
            // FROM buildings
            // LEFT JOIN building_photos ON (buildings.id = building_photos.build_id)
            // WHERE buildings.deleted_at IS NULL
            // GROUP BY buildings.id


            return view('buildings.index',compact('search_building'));
            // return view('buildings.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd('buildingsのstoreを実行中');
        DB::transaction(function() use($request) {
            // 'user_id' => \Auth::id()]);

            $build_id = Building::insertGetId([
                'build_num' => $request->txt_build_num,
                'build_name' => $request->txt_build_nm,
                'build_name_kana' => $request->txt_build_nm_kana,
                'visible_flg' => $request->boolean('chk_visible'),
                'zipcode' => $request->txt_zipcode,
                'address1' => $request->txt_address1,
                'address2' => $request->txt_address2,
                'address3' => $request->txt_address3,
            ]);
        });

        return redirect()
            ->route('buildings.index')
            ->with([
                'message' => '建物が登録されました',
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

        $image_url = null;
        // if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
        //     $image_url = '/storage/profile_images/'. Auth::id() . '.jpg';
        // }
        // return view('users.show', [
        //     'image_url' => $image_url
        // ]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        return view('buildings.search');
    }

    // public function searchBuilding()
    // {
    //     dd('seachbuildings');
    // }

}

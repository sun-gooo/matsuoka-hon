<?php

namespace App\Providers;

use App\Models\Campus;
use App\Models\Faculty;
use App\Models\Gate;
use App\Models\Promotion;
use App\Models\Property;
use App\Models\Structure;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //全てのメソッドが呼ばれる前に呼ばれるメソッド
        view()->composer('*', function($view) {

            //物件種別の取得
            $property_model = new Property();
            $properties = $property_model->getMyProperty();
                        
            //構造種別の取得
            $structure_model = new Structure();
            $structures = $structure_model->getMyStructure();

            //キャンパスの取得
            $campus_model = new Campus();
            $campuses = $campus_model->getMyCampus();

            //学部の取得
            $faculty_model = new Faculty();
            $faculties = $faculty_model->getMyFaculty();

            //門の取得
            $gate_model = new Gate();
            $gates = $gate_model->getMyGate();
            
            //キャンペーン情報の取得
            $promotion_model = new Promotion();
            $promotions = $promotion_model->getMypromotion();


            // dd($structures);
            $view->with('properties', $properties)
                 ->with('structures', $structures)
                 ->with('campuses', $campuses)
                 ->with('faculties', $faculties)
                 ->with('gates', $gates)
                 ->with('promotions', $promotions);
        });
    }
}

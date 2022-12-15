<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = Carbon::now();

        DB::table('properties')->insert([
            ['id' => 1, 'property_type' => '01', 'property_name' => 'アパート', 'created_at' => $now],
            ['id' => 2, 'property_type' => '02', 'property_name' => 'マンション', 'created_at' => $now],
            ['id' => 3, 'property_type' => '03', 'property_name' => 'ハイツ', 'created_at' => $now],
            ['id' => 4, 'property_type' => '04', 'property_name' => 'コーポ', 'created_at' => $now],
            ['id' => 5, 'property_type' => '05', 'property_name' => 'テラスハウス', 'created_at' => $now],
            ['id' => 6, 'property_type' => '06', 'property_name' => 'タウンハウス', 'created_at' => $now],
            ['id' => 11, 'property_type' => '11', 'property_name' => '貸家', 'created_at' => $now],
            ['id' => 21, 'property_type' => '21', 'property_name' => '店舗', 'created_at' => $now],
            ['id' => 22, 'property_type' => '22', 'property_name' => '住宅付店舗', 'created_at' => $now],
            ['id' => 23, 'property_type' => '23', 'property_name' => '倉庫付店舗', 'created_at' => $now],
            ['id' => 31, 'property_type' => '31', 'property_name' => '事務所', 'created_at' => $now],
            ['id' => 32, 'property_type' => '32', 'property_name' => '事務所・店舗', 'created_at' => $now],
            ['id' => 33, 'property_type' => '33', 'property_name' => '店舗・事務所', 'created_at' => $now],
            ['id' => 34, 'property_type' => '34', 'property_name' => '倉庫付事務所', 'created_at' => $now],
            ['id' => 35, 'property_type' => '35', 'property_name' => '住宅付事務所', 'created_at' => $now],
            ['id' => 36, 'property_type' => '36', 'property_name' => '倉庫', 'created_at' => $now], 
        ]);



    }
}

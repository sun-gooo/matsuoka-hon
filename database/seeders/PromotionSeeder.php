<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PromotionSeeder extends Seeder
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

        DB::table('promotions')->insert([
            [
                'id' => 1,
                'promotion_name' => 'キャンペーン１',
                'visible_flg' => false,
                'created_at' => $now,
            ],
            [
                'id' => 2,
                'promotion_name' => 'キャンペーン２',
                'visible_flg' => false,
                'created_at' => $now,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CampusSeeder extends Seeder
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

        DB::table('campuses')->insert([
            [
                'campus_name' => '五十嵐キャンパス',
                'sort_num' => '1',
                'created_at' => $now,
            ],
            [
                'campus_name' => '旭町キャンパス',
                'sort_num' => '2',
                'created_at' => $now,
            ],
        ]);
    }
}

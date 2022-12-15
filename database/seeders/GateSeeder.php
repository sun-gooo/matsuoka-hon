<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GateSeeder extends Seeder
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

        DB::table('gates')->insert([
            [
                'gate_name' => '北門',
                'sort_num' => 1,
                'latitude' => 37.8673282,
                'longitude' => 138.935228,
                'created_at' => $now,
            ],
            [
                'gate_name' => '西門',
                'sort_num' => 2,
                'latitude' => 37.8657782,
                'longitude' => 138.9395785,
                'created_at' => $now,
            ],
            [
                'gate_name' => '中門',
                'sort_num' => 3,
                'latitude' => 37.8669354,
                'longitude' => 138.9454309,
                'created_at' => $now,
            ],
            [
                'gate_name' => '正門',
                'sort_num' => 4,
                'latitude' => 37.8666443,
                'longitude' => 138.9442722,
                'created_at' => $now,
            ],
            [
                'gate_name' => '新潟大学前駅周辺',
                'sort_num' => 5,
                'latitude' => 37.8699479,
                'longitude' => 138.9556508,
                'created_at' => $now,
            ],
            [
                'gate_name' => '内野駅周辺',
                'sort_num' => 6,
                'latitude' => 37.8555537,
                'longitude' => 138.9337484,
                'created_at' => $now,
            ],
            [
                'gate_name' => 'その他',
                'sort_num' => 7,
                'latitude' => null,
                'longitude' => null,
                'created_at' => $now,
            ],
        ]);
    }
}

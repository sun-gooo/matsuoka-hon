<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructureSeeder extends Seeder
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


        DB::table('structures')->insert([
            ['id' => 1, 'structure_type' => '01', 'structure_name' => '木造', 'created_at' => $now],
            ['id' => 2, 'structure_type' => '02', 'structure_name' => '木造2×4', 'created_at' => $now],
            ['id' => 3, 'structure_type' => '11', 'structure_name' => '軽量鉄骨', 'created_at' => $now],
            ['id' => 4, 'structure_type' => '12', 'structure_name' => '鉄骨', 'created_at' => $now],
            ['id' => 5, 'structure_type' => '13', 'structure_name' => '鉄骨ALC', 'created_at' => $now],
            ['id' => 6, 'structure_type' => '14', 'structure_name' => '重量鉄骨', 'created_at' => $now],
            ['id' => 7, 'structure_type' => '21', 'structure_name' => '鉄筋コンクリート', 'created_at' => $now],
            ['id' => 8, 'structure_type' => '22', 'structure_name' => '鉄骨鉄筋コンクリート', 'created_at' => $now],
            ['id' => 9, 'structure_type' => '23', 'structure_name' => 'RC一部鉄骨造', 'created_at' => $now],
            ['id' => 10, 'structure_type' => '31', 'structure_name' => 'PC', 'created_at' => $now],
            ['id' => 11, 'structure_type' => '32', 'structure_name' => 'HPC', 'created_at' => $now],
            ['id' => 12, 'structure_type' => '41', 'structure_name' => 'ブロック', 'created_at' => $now],
            ['id' => 13, 'structure_type' => '99', 'structure_name' => 'その他', 'created_at' => $now],
        ]);

    }
}

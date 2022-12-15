<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FloorSeeder extends Seeder
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

        DB::table('floors')->insert([
            ['id' => 1, 'floor_type' => '10', 'floor_name' => '1R', 'sort_num' => 1, 'created_at' => $now],
            ['id' => 2, 'floor_type' => '16', 'floor_name' => '1SR', 'sort_num' => 2, 'created_at' => $now],
            ['id' => 3, 'floor_type' => '11', 'floor_name' => '1K', 'sort_num' => 3, 'created_at' => $now],
            ['id' => 4, 'floor_type' => '17', 'floor_name' => '1SK', 'sort_num' => 4, 'created_at' => $now],
            ['id' => 5, 'floor_type' => '12', 'floor_name' => '1DK', 'sort_num' => 5, 'created_at' => $now],
            ['id' => 6, 'floor_type' => '13', 'floor_name' => '1SDK', 'sort_num' => 6, 'created_at' => $now],
            ['id' => 7, 'floor_type' => '14', 'floor_name' => '1LDK', 'sort_num' => 7, 'created_at' => $now],
            ['id' => 8, 'floor_type' => '15', 'floor_name' => '1SLDK', 'sort_num' => 8, 'created_at' => $now],
            ['id' => 9, 'floor_type' => '20', 'floor_name' => '2R', 'sort_num' => 9, 'created_at' => $now],
            ['id' => 10, 'floor_type' => '26', 'floor_name' => '2SR', 'sort_num' => 10, 'created_at' => $now],
            ['id' => 11, 'floor_type' => '21', 'floor_name' => '2K', 'sort_num' => 11, 'created_at' => $now],
            ['id' => 12, 'floor_type' => '27', 'floor_name' => '2SK', 'sort_num' => 12, 'created_at' => $now],
            ['id' => 13, 'floor_type' => '22', 'floor_name' => '2DK', 'sort_num' => 13, 'created_at' => $now],
            ['id' => 14, 'floor_type' => '23', 'floor_name' => '2SDK', 'sort_num' => 14, 'created_at' => $now],
            ['id' => 15, 'floor_type' => '24', 'floor_name' => '2LDK', 'sort_num' => 15, 'created_at' => $now],
            ['id' => 16, 'floor_type' => '25', 'floor_name' => '2SLDK', 'sort_num' => 16, 'created_at' => $now],
            ['id' => 17, 'floor_type' => '30', 'floor_name' => '3R', 'sort_num' => 17, 'created_at' => $now],
            ['id' => 18, 'floor_type' => '36', 'floor_name' => '3SR', 'sort_num' => 18, 'created_at' => $now],
            ['id' => 19, 'floor_type' => '31', 'floor_name' => '3K', 'sort_num' => 19, 'created_at' => $now],
            ['id' => 20, 'floor_type' => '37', 'floor_name' => '3SK', 'sort_num' => 20, 'created_at' => $now],
            ['id' => 21, 'floor_type' => '32', 'floor_name' => '3DK', 'sort_num' => 21, 'created_at' => $now],
            ['id' => 22, 'floor_type' => '33', 'floor_name' => '3SDK', 'sort_num' => 22, 'created_at' => $now],
            ['id' => 23, 'floor_type' => '34', 'floor_name' => '3LDK', 'sort_num' => 23, 'created_at' => $now],
            ['id' => 24, 'floor_type' => '35', 'floor_name' => '3SLDK', 'sort_num' => 24, 'created_at' => $now],
            ['id' => 25, 'floor_type' => '40', 'floor_name' => '4R', 'sort_num' => 25, 'created_at' => $now],
            ['id' => 26, 'floor_type' => '46', 'floor_name' => '4SR', 'sort_num' => 26, 'created_at' => $now],
            ['id' => 27, 'floor_type' => '41', 'floor_name' => '4K', 'sort_num' => 27, 'created_at' => $now],
            ['id' => 28, 'floor_type' => '47', 'floor_name' => '4SK', 'sort_num' => 28, 'created_at' => $now],
            ['id' => 29, 'floor_type' => '42', 'floor_name' => '4DK', 'sort_num' => 29, 'created_at' => $now],
            ['id' => 30, 'floor_type' => '43', 'floor_name' => '4SDK', 'sort_num' => 30, 'created_at' => $now],
            ['id' => 31, 'floor_type' => '44', 'floor_name' => '4LDK', 'sort_num' => 31, 'created_at' => $now],
            ['id' => 32, 'floor_type' => '45', 'floor_name' => '4SLDK', 'sort_num' => 32, 'created_at' => $now],
            ['id' => 33, 'floor_type' => '50', 'floor_name' => '5R', 'sort_num' => 33, 'created_at' => $now],
            ['id' => 34, 'floor_type' => '56', 'floor_name' => '5SR', 'sort_num' => 34, 'created_at' => $now],
            ['id' => 35, 'floor_type' => '51', 'floor_name' => '5K', 'sort_num' => 35, 'created_at' => $now],
            ['id' => 36, 'floor_type' => '57', 'floor_name' => '5SK', 'sort_num' => 36, 'created_at' => $now],
            ['id' => 37, 'floor_type' => '52', 'floor_name' => '5DK', 'sort_num' => 37, 'created_at' => $now],
            ['id' => 38, 'floor_type' => '53', 'floor_name' => '5SDK', 'sort_num' => 38, 'created_at' => $now],
            ['id' => 39, 'floor_type' => '54', 'floor_name' => '5LDK', 'sort_num' => 39, 'created_at' => $now],
            ['id' => 40, 'floor_type' => '55', 'floor_name' => '5SLDK', 'sort_num' => 40, 'created_at' => $now],
            ['id' => 41, 'floor_type' => '60', 'floor_name' => '6R', 'sort_num' => 41, 'created_at' => $now],
            ['id' => 42, 'floor_type' => '66', 'floor_name' => '6SR', 'sort_num' => 42, 'created_at' => $now],
            ['id' => 43, 'floor_type' => '61', 'floor_name' => '6K', 'sort_num' => 43, 'created_at' => $now],
            ['id' => 44, 'floor_type' => '67', 'floor_name' => '6SK', 'sort_num' => 44, 'created_at' => $now],
            ['id' => 45, 'floor_type' => '62', 'floor_name' => '6DK', 'sort_num' => 45, 'created_at' => $now],
            ['id' => 46, 'floor_type' => '63', 'floor_name' => '6SDK', 'sort_num' => 46, 'created_at' => $now],
            ['id' => 47, 'floor_type' => '64', 'floor_name' => '6LDK', 'sort_num' => 47, 'created_at' => $now],
            ['id' => 48, 'floor_type' => '65', 'floor_name' => '6SLDK', 'sort_num' => 48, 'created_at' => $now],
            ['id' => 49, 'floor_type' => '70', 'floor_name' => '7R', 'sort_num' => 49, 'created_at' => $now],
            ['id' => 50, 'floor_type' => '76', 'floor_name' => '7SR', 'sort_num' => 50, 'created_at' => $now],
            ['id' => 51, 'floor_type' => '71', 'floor_name' => '7K', 'sort_num' => 51, 'created_at' => $now],
            ['id' => 52, 'floor_type' => '77', 'floor_name' => '7SK', 'sort_num' => 52, 'created_at' => $now],
            ['id' => 53, 'floor_type' => '72', 'floor_name' => '7DK', 'sort_num' => 53, 'created_at' => $now],
            ['id' => 54, 'floor_type' => '73', 'floor_name' => '7SDK', 'sort_num' => 54, 'created_at' => $now],
            ['id' => 55, 'floor_type' => '74', 'floor_name' => '7LDK', 'sort_num' => 55, 'created_at' => $now],
            ['id' => 56, 'floor_type' => '75', 'floor_name' => '7SLDK', 'sort_num' => 56, 'created_at' => $now],
            ['id' => 57, 'floor_type' => '80', 'floor_name' => '8R', 'sort_num' => 57, 'created_at' => $now],
            ['id' => 58, 'floor_type' => '86', 'floor_name' => '8SR', 'sort_num' => 58, 'created_at' => $now],
            ['id' => 59, 'floor_type' => '81', 'floor_name' => '8K', 'sort_num' => 59, 'created_at' => $now],
            ['id' => 60, 'floor_type' => '87', 'floor_name' => '8SK', 'sort_num' => 60, 'created_at' => $now],
            ['id' => 61, 'floor_type' => '82', 'floor_name' => '8DK', 'sort_num' => 61, 'created_at' => $now],
            ['id' => 62, 'floor_type' => '83', 'floor_name' => '8SDK', 'sort_num' => 62, 'created_at' => $now],
            ['id' => 63, 'floor_type' => '84', 'floor_name' => '8LDK', 'sort_num' => 63, 'created_at' => $now],
            ['id' => 64, 'floor_type' => '85', 'floor_name' => '8SLDK', 'sort_num' => 64, 'created_at' => $now],
            ['id' => 65, 'floor_type' => '90', 'floor_name' => '9R', 'sort_num' => 65, 'created_at' => $now],
            ['id' => 66, 'floor_type' => '96', 'floor_name' => '9SR', 'sort_num' => 66, 'created_at' => $now],
            ['id' => 67, 'floor_type' => '91', 'floor_name' => '9K', 'sort_num' => 67, 'created_at' => $now],
            ['id' => 68, 'floor_type' => '97', 'floor_name' => '9SK', 'sort_num' => 68, 'created_at' => $now],
            ['id' => 69, 'floor_type' => '92', 'floor_name' => '9DK', 'sort_num' => 69, 'created_at' => $now],
            ['id' => 70, 'floor_type' => '93', 'floor_name' => '9SDK', 'sort_num' => 70, 'created_at' => $now],
            ['id' => 71, 'floor_type' => '94', 'floor_name' => '9LDK', 'sort_num' => 71, 'created_at' => $now],
            ['id' => 72, 'floor_type' => '95', 'floor_name' => '9SLDK', 'sort_num' => 72, 'created_at' => $now],
            ['id' => 73, 'floor_type' => 'A0', 'floor_name' => '10R', 'sort_num' => 73, 'created_at' => $now],
            ['id' => 74, 'floor_type' => 'A6', 'floor_name' => '10SR', 'sort_num' => 74, 'created_at' => $now],
            ['id' => 75, 'floor_type' => 'A1', 'floor_name' => '10K', 'sort_num' => 75, 'created_at' => $now],
            ['id' => 76, 'floor_type' => 'A7', 'floor_name' => '10SK', 'sort_num' => 76, 'created_at' => $now],
            ['id' => 77, 'floor_type' => 'A2', 'floor_name' => '10DK', 'sort_num' => 77, 'created_at' => $now],
            ['id' => 78, 'floor_type' => 'A3', 'floor_name' => '10SDK', 'sort_num' => 78, 'created_at' => $now],
            ['id' => 79, 'floor_type' => 'A4', 'floor_name' => '10LDK', 'sort_num' => 79, 'created_at' => $now],
            ['id' => 80, 'floor_type' => 'A5', 'floor_name' => '10SLDK', 'sort_num' => 80, 'created_at' => $now],
        ]);
        

    }
}

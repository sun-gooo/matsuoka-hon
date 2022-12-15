<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacultySeeder extends Seeder
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

        DB::table('faculties')->insert([
            [
                'faculty_name' => '工学部',
                'campus_id' => 1,
                'sort_num' => 1,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '理学部',
                'campus_id' => 1,
                'sort_num' => 2,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '教育学部',
                'campus_id' => 1,
                'sort_num' => 3,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '農学部',
                'campus_id' => 1,
                'sort_num' => 4,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '経済学部',
                'campus_id' => 1,
                'sort_num' => 5,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '法学部',
                'campus_id' => 1,
                'sort_num' => 6,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '人文学部',
                'campus_id' => 1,
                'sort_num' => 7,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '創生学部',
                'campus_id' => 1,
                'sort_num' => 8,
                'created_at' => $now,
            ],
            [
                'faculty_name' => '医・歯学部（1年次）',
                'campus_id' => 1,
                'sort_num' => 9,
                'created_at' => $now,
            ],
        ]);
}
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' => 'user1@test.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
            ],
            [
                'name' => 'test100',
                'email' => 'test100@test.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
            ],
            [
                'name' => 'test101',
                'email' => 'test101@test.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
            ]
        ]);
    }
}

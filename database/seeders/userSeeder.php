<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Http\Controllers\User_Controller;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'name' => 'wasifkhan',
                'email' => 'wasifkhan@gmail.com',
                'password' => Hash::make('12345')
            ],
            [
                'name' => 'wahabkhan',
                'email' => 'wahabkhan@gmail.com',
                'password' => Hash::make('12345')
            ],
            [
                'name' => 'junaidkhan',
                'email' => 'junaidkhan@gmail.com',
                'password' => Hash::make('12345')
            ]
           
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                'name' => 'LG Mobile',
                'price' => '20000',
                'description' => 'In this mobile have alot of Features',
                'category' => 'Mobile',
                'gallery' => "E:\LaravelProjects\EcommerceProject\public\storage\image\1723112574.jpg",
            ],
            [
                'name' => 'Iphone Mobile',
                'price' => '80000',
                'description' => 'Iphone is unbelievable Mobile in the world',
                'category' => 'Iphone',
                'gallery' => "E:\LaravelProjects\EcommerceProject\public\storage\image\1723112574.jpg",
            ],
            [
                'name' => 'Sumsung Mobile',
                'price' => '30000',
                'description' => 'Sumsung is also have more beautiful mobile',
                'category' => 'Sumsung',
                'gallery' => "E:\LaravelProjects\EcommerceProject\public\storage\image\1723112574.jpg",
            ],
            [
                'name' => 'Y21 Mobile',
                'price' => '35800',
                'description' => 'Y21 is also have more beautiful mobile',
                'category' => 'Vivo',
                'gallery' => "E:\LaravelProjects\EcommerceProject\public\storage\image\1723112574.jpg",
            ],
        ]);
    }
}

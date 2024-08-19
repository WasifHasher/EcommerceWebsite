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
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXUVXERm3yWgAa9s5uAIG2et2PtD1mM-1n6g&s",
            ],
            [
                'name' => 'Iphone',
                'price' => '80000',
                'description' => 'Iphone is unbelievable Mobile in the world',
                'category' => 'Iphone',
                'gallery' => "https://images.unsplash.com/photo-1599950755346-a3e58f84ca63?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8fDA%3D",
            ],
            [
                'name' => 'Sumsung Mobile',
                'price' => '30000',
                'description' => 'Sumsung is also have more beautiful mobile',
                'category' => 'Sumsung',
                'gallery' => "https://images.unsplash.com/photo-1592578629295-73a151d69c96?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fHww",
            ],
            [
                'name' => 'Y21 Mobile',
                'price' => '35800',
                'description' => 'Y21 is also have more beautiful mobile',
                'category' => 'Vivo',
                'gallery' => "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fHww",
            ],
            [
                'name' => 'Q Mobile',
                'price' => '35800',
                'description' => 'Q mobile is also have more beautiful mobile',
                'category' => 'Vivo',
                'gallery' => "https://images.unsplash.com/photo-1622782914767-404fb9ab3f57?q=80&w=1664&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            ],
        ]);
    }
}

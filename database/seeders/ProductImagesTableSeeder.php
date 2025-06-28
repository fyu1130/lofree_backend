<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\ProductImage;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            ['product_id' => 1, 'path' => 'products/laptop1.jpg', 'created_at' => Carbon::parse('2024-06-03 09:00:00')],
            ['product_id' => 1, 'path' => 'products/laptop2.jpg', 'created_at' => Carbon::parse('2024-06-03 09:05:00')],
            ['product_id' => 3, 'path' => 'products/table1.jpg', 'created_at' => Carbon::parse('2024-06-03 09:10:00')],
            ['product_id' => 5, 'path' => 'products/parker1.jpg', 'created_at' => Carbon::parse('2024-06-03 09:15:00')],
            ['product_id' => 6, 'path' => 'products/onepiece1.jpg', 'created_at' => Carbon::parse('2024-06-03 09:20:00')],
            ['product_id' => 7, 'path' => 'products/kimetsu.jpg', 'created_at' => Carbon::parse('2024-06-03 09:25:00')],
            ['product_id' => 9, 'path' => 'products/switch.jpg', 'created_at' => Carbon::parse('2024-06-03 09:30:00')],
            ['product_id' => 10, 'path' => 'products/pokemon.jpg', 'created_at' => Carbon::parse('2024-06-03 09:35:00')],
            ['product_id' => 11, 'path' => 'products/painting.jpg', 'created_at' => Carbon::parse('2024-06-03 09:40:00')],
        ]);
        ProductImage::factory()->count(10)->create();
    }
}

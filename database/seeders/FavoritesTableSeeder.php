<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Favorite;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favorites')->insert([
            ['user_id' => 1, 'product_id' => 3, 'created_at' => Carbon::parse('2024-06-04 10:00:00')],
            ['user_id' => 2, 'product_id' => 5, 'created_at' => Carbon::parse('2024-06-04 10:10:00')],
            ['user_id' => 3, 'product_id' => 1, 'created_at' => Carbon::parse('2024-06-04 10:20:00')],
            ['user_id' => 4, 'product_id' => 9, 'created_at' => Carbon::parse('2024-06-04 10:30:00')],
            ['user_id' => 5, 'product_id' => 11, 'created_at' => Carbon::parse('2024-06-04 10:40:00')],
            ['user_id' => 6, 'product_id' => 10, 'created_at' => Carbon::parse('2024-06-04 10:50:00')],
            ['user_id' => 7, 'product_id' => 1, 'created_at' => Carbon::parse('2024-06-04 11:00:00')],
        ]);
        Favorite::factory()->count(3)->create();
    }
}

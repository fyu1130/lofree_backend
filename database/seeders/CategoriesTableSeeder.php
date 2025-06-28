<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => '家電', 'created_at' => Carbon::parse('2024-05-31 08:00:00')],
            ['name' => '家具', 'created_at' => Carbon::parse('2024-05-31 08:10:00')],
            ['name' => '衣類', 'created_at' => Carbon::parse('2024-05-31 08:20:00')],
            ['name' => '本・雑誌', 'created_at' => Carbon::parse('2024-05-31 08:30:00')],
            ['name' => 'おもちゃ・ゲーム', 'created_at' => Carbon::parse('2024-05-31 08:40:00')],
            ['name' => '絵画', 'created_at' => Carbon::parse('2024-05-31 08:50:00')],
        ]);
    }
}

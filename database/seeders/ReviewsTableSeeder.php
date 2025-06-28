<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            ['transaction_id' => 1, 'rating' => 5, 'comment' => '丁寧な対応でした！', 'created_at' => Carbon::parse('2024-06-07 12:00:00')],
            ['transaction_id' => 2, 'rating' => 4, 'comment' => '商品も良く、すぐ届きました。', 'created_at' => Carbon::parse('2024-06-07 12:10:00')],
            ['transaction_id' => 3, 'rating' => 3, 'comment' => '普通でした。', 'created_at' => Carbon::parse('2024-06-07 12:20:00')],
        ]);
        Review::factory()->count(2)->create();
    }
}

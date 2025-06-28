<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Inquiry;

class InquiriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inquiries')->insert([
            ['user_id' => 1, 'subject' => '商品について', 'body' => '商品の状態を詳しく教えてください。', 'email' => 'tanaka@example.com', 'status' => 'open', 'created_at' => Carbon::parse('2024-06-09 08:00:00')],
            ['user_id' => 5, 'subject' => '配送遅延について', 'body' => '商品がまだ届きません。いつ届きますか？', 'email' => 'ryo@example.com', 'status' => 'closed', 'created_at' => Carbon::parse('2024-06-09 08:10:00')],
        ]);
        Inquiry::factory()->count(3)->create();
    }

}

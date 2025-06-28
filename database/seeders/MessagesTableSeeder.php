<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            ['chat_id' => 1, 'sender_id' => 1, 'message' => 'この商品まだありますか？', 'created_at' => Carbon::parse('2024-06-08 10:01:00')],
            ['chat_id' => 2, 'sender_id' => 2, 'message' => 'サイズはどれくらいですか？', 'created_at' => Carbon::parse('2024-06-08 10:11:00')],
            ['chat_id' => 3, 'sender_id' => 4, 'message' => '絵画のサイズは？額付き？', 'created_at' => Carbon::parse('2024-06-08 10:21:00')],
        ]);
        Message::factory()->count(10)->create();
    }
}

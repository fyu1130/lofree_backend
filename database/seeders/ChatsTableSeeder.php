<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Chat;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chats')->insert([
            ['user_id' => 1, 'product_id' => 1, 'created_at' => Carbon::parse('2024-06-08 10:00:00')],
            ['user_id' => 2, 'product_id' => 5, 'created_at' => Carbon::parse('2024-06-08 10:10:00')],
            ['user_id' => 4, 'product_id' => 11, 'created_at' => Carbon::parse('2024-06-08 10:20:00')],
        ]);
        Chat::factory()->count(1)->create();
    }
}

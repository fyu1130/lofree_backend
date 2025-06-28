<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            ['order_id' => 1, 'product_id' => 1, 'created_at' => Carbon::parse('2024-06-06 10:00:00')],
            ['order_id' => 2, 'product_id' => 2, 'created_at' => Carbon::parse('2024-06-06 10:10:00')],
            ['order_id' => 4, 'product_id' => 7, 'created_at' => Carbon::parse('2024-06-06 10:20:00')],
        ]);
        Transaction::factory()->count(2)->create();
    }
}

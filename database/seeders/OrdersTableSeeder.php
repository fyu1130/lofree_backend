<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'product_id' => 1,
                'payment_method' => 'card',
                'delivery_name' => '田中 太郎',
                'postal_code' => '100-0001',
                'address' => '港区芝公園1-1-1',
                'building' => '森ビル303',
                'phone' => '08011112222',
                'status' => 'pending',
                'created_at' => Carbon::parse('2024-06-05 09:00:00')
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'payment_method' => 'cash',
                'delivery_name' => '鈴木 花子',
                'postal_code' => '150-0002',
                'address' => '渋谷区神南2-2-2',
                'building' => 'コーポ花 203',
                'phone' => '08022223333',
                'status' => 'completed',
                'created_at' => Carbon::parse('2024-06-05 09:10:00')
            ],
            [
                'user_id' => 3,
                'product_id' => 5,
                'payment_method' => 'card',
                'delivery_name' => '佐藤 健',
                'postal_code' => '123-4567',
                'address' => '中野区中央3-3-3',
                'building' => 'B棟501',
                'phone' => '08033334444',
                'status' => 'canceled',
                'created_at' => Carbon::parse('2024-06-05 09:20:00')
            ],
            [
                'user_id' => 4,
                'product_id' => 7,
                'payment_method' => 'card',
                'delivery_name' => '高橋 舞',
                'postal_code' => '162-0845',
                'address' => '新宿区市谷本村町4-4',
                'building' => '301号室',
                'phone' => '08044445555',
                'status' => 'completed',
                'created_at' => Carbon::parse('2024-06-05 09:30:00')
            ],
        ]);
        Order::factory()->count(2)->create();
    }
}

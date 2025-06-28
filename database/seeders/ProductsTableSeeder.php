<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['title' => 'ノートパソコン', 'description' => '中古ノートPC', 'price' => 65000, 'category_id' => 1, 'condition' => 'used', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 10:00:00')],
            ['title' => 'デジカメ', 'description' => '2000万画素の新品デジカメ', 'price' => 12000, 'category_id' => 1, 'condition' => 'new', 'status' => 'sold', 'created_at' => Carbon::parse('2024-06-02 10:10:00')],
            ['title' => 'ローテーブル', 'description' => '北欧家具のローテーブル', 'price' => 9000, 'category_id' => 2, 'condition' => 'used', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 10:20:00')],
            ['title' => 'ダイニングチェア', 'description' => '高さ調整可能なチェア', 'price' => 4000, 'category_id' => 2, 'condition' => 'new', 'status' => 'deleted', 'created_at' => Carbon::parse('2024-06-02 10:30:00')],
            ['title' => 'パーカー', 'description' => 'メンズ用のパーカー', 'price' => 2500, 'category_id' => 3, 'condition' => 'used', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 10:40:00')],
            ['title' => 'ワンピース', 'description' => 'レディース春服ワンピース', 'price' => 3000, 'category_id' => 3, 'condition' => 'new', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 10:50:00')],
            ['title' => '鬼滅の刃セット', 'description' => '全23巻セット', 'price' => 6800, 'category_id' => 4, 'condition' => 'used', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 11:00:00')],
            ['title' => 'FUDGE 2024年4月号', 'description' => 'レディース向けファッション雑誌', 'price' => 500, 'category_id' => 4, 'condition' => 'new', 'status' => 'sold', 'created_at' => Carbon::parse('2024-06-02 11:10:00')],
            ['title' => 'Switch本体', 'description' => 'Liteモデルの本体', 'price' => 19800, 'category_id' => 5, 'condition' => 'used', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 11:20:00')],
            ['title' => 'ポケモンカード', 'description' => 'ミュウUR 美品', 'price' => 1500, 'category_id' => 5, 'condition' => 'new', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 11:30:00')],
            ['title' => '油彩の風景画', 'description' => '額付き、F6サイズの油絵', 'price' => 20000, 'category_id' => 6, 'condition' => 'new', 'status' => 'active', 'created_at' => Carbon::parse('2024-06-02 11:40:00')],
        ]);
        Product::factory()->count(10)->create();
    }
}

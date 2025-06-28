<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            ['name' => '管理者 一郎', 'email' => 'admin1@example.com', 'password' => Hash::make('admin123'), 'created_at' => Carbon::parse('2024-06-01 09:00:00')],
            ['name' => '管理者 二郎', 'email' => 'admin2@example.com', 'password' => Hash::make('admin123'), 'created_at' => Carbon::parse('2024-06-01 09:10:00')],
        ]);
        Admin::factory()->count(1)->create();
    }
}

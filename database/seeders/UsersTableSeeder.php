<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => '田中 太郎', 'email' => 'tanaka@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:00:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '鈴木 花子', 'email' => 'hanako@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:05:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '佐藤 健', 'email' => 'sato@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:10:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '高橋 舞', 'email' => 'mai@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:15:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '小林 涼', 'email' => 'ryo@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:20:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '山田 真', 'email' => 'makoto@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:25:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '松本 結衣', 'email' => 'yui@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:30:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '中村 海斗', 'email' => 'kaito@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:35:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '井上 真央', 'email' => 'mao@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:40:00'),
            'email_verified_at' => now(),
            ],
            ['name' => '石田 啓太', 'email' => 'keita@example.com', 'password' => Hash::make('password123'), 'created_at' => Carbon::parse('2024-06-01 10:45:00'),
            'email_verified_at' => now(),
            ],
        ]);
        User::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use App\Models\User;
// use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \Illuminate\Foundation\Auth\User::factory(10)->create();

        // \Illuminate\Foundation\Auth\User::factory()->create([
        //     'name' => 'Sulaiman Yusuf',
        //     'email' => 'admin@admin.com',
        //     'password' => 'admin123',
        //     'level' => 'admin',
        //     'foto' => '1679467535_WIN_20221205_23_05_32_Pro.jpg'
        // ]);

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'foto' => '1679467535_WIN_20221205_23_05_32_Pro.jpg',
                'password' => bcrypt('admin123')
            ]
        ]);
    }
}

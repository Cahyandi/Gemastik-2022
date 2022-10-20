<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(WisataSeeder::class);
=======
        $this->call([
            WisataSeeder::class,
            UserSeeder::class,
            DinasSeeder::class,
            PostSeeder::class
        ]);
>>>>>>> bbb81f457511bd4d59967b68eed3cdaeb067bb5e
        // \App\Models\User::factory(10)->create();
        Dinas::insert([
            [
                'username' => 'rifki',
                'email' => 'rifki@email.com',
                'no_telp' => '0812121211122',
                'password' => bcrypt('rifki123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'username' => 'sukageuri',
                'email' => 'sukageuri@email.com',
                'no_telp' => '081231231231',
                'password' => bcrypt('sukageuri123'),
                'role' => 'petugas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dinas::insert([
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'no_telp' => '083871352030',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'username' => 'petugas',
                'email' => 'petugas@gmail.com',
                'no_telp' => '083871352030',
                'password' => bcrypt('petugas'),
                'role' => 'petugas',
            ]
        ]);
    }
}

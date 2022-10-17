<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'ilham',
            'name' => 'ilham',
            'email' => 'ilham@gmail.com',
            'no_telp' => '083871352030',
            'password' => bcrypt('ilham'),
        ]);
    }
}

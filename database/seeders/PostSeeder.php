<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'wisata_id' => 1,
            'img' => 'wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg',
            'caption' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, fugit, cumque incidunt voluptates quis et illum sunt tenetur inventore dolore temporibus quasi numquam culpa vero iste voluptatem amet deserunt delectus!'
        ]);
    }
}

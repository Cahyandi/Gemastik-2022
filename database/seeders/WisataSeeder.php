<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wisata;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wisata::insert([
            [
                'id_dinas' => 2,
                'nama_wisata' => "Waduk Darma",
                'img_wisata' => "wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg",
                'alamat' => "Desa Jagara, Kecamatan Darma",
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem fugit sed dolorum temporibus voluptate fugiat! Ex adipisci aliquam consectetur sint reprehenderit ut veritatis officia, ad, debitis dignissimos sunt culpa quis.',
                'harga_tiket' => '10000',
                'latitude' => '-6.982317534742',
                'longitude' => '108.48271626027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dinas' => 2,
                'nama_wisata' => "Cibulan",
                'img_wisata' => "wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg",
                'alamat' => "Maniskidul, Kec. Jalaksana",
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem fugit sed dolorum temporibus voluptate fugiat! Ex adipisci aliquam consectetur sint reprehenderit ut veritatis officia, ad, debitis dignissimos sunt culpa quis.',
                'harga_tiket' => '10000',
                'latitude' => '-6.982317534742',
                'longitude' => '108.48271626027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dinas' => 2,
                'nama_wisata' => "Tenjo Laut",
                'img_wisata' => "wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg",
                'alamat' => "Mandirancan, Kec. Cigugur",
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem fugit sed dolorum temporibus voluptate fugiat! Ex adipisci aliquam consectetur sint reprehenderit ut veritatis officia, ad, debitis dignissimos sunt culpa quis.',
                'harga_tiket' => '10000',
                'latitude' => '-6.982317534742',
                'longitude' => '108.48271626027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dinas' => 2,
                'nama_wisata' => "Curug Bangkong",
                'img_wisata' => "wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg",
                'alamat' => " Kertawirama, Kec. Nusaherang",
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem fugit sed dolorum temporibus voluptate fugiat! Ex adipisci aliquam consectetur sint reprehenderit ut veritatis officia, ad, debitis dignissimos sunt culpa quis.',
                'harga_tiket' => '10000',
                'latitude' => '-6.982317534742',
                'longitude' => '108.48271626027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dinas' => 2,
                'nama_wisata' => "Buper Ipukan",
                'img_wisata' => "wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg",
                'alamat' => "Cisantana, Kec. Cigugur",
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem fugit sed dolorum temporibus voluptate fugiat! Ex adipisci aliquam consectetur sint reprehenderit ut veritatis officia, ad, debitis dignissimos sunt culpa quis.',
                'harga_tiket' => '10000',
                'latitude' => '-6.982317534742',
                'longitude' => '108.48271626027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dinas' => 2,
                'nama_wisata' => "Sawah Lope",
                'img_wisata' => "wisata/XE631I6S4kPBhIrjk3aPROaDJlsaEjQ4BXN2hItU.jpg",
                'alamat' => "Cikaso, Kec. Kramatmulya",
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem fugit sed dolorum temporibus voluptate fugiat! Ex adipisci aliquam consectetur sint reprehenderit ut veritatis officia, ad, debitis dignissimos sunt culpa quis.',
                'harga_tiket' => '10000',
                'latitude' => '-6.982317534742',
                'longitude' => '108.48271626027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dinas_id');
            $table->string('nama_wisata');
            $table->string('img_wisata');
            // $table->string('galeri_satu');
            // $table->string('galeri_dua');
            // $table->string('galeri_tiga');
            $table->text('alamat');
            $table->text('deskripsi');
            $table->string('harga_tiket');
            $table->string('total_rating')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
}

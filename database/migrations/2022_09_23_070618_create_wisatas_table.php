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
<<<<<<< HEAD
            $table->text('alamat');
            $table->text('deskripsi');
            $table->string('htm_weekday');
            $table->string('htm_weekend')->nullable();
            $table->string('total_rating')->nullable();
=======
            $table->text('fasilitas');
            $table->text('alamat');
            $table->text('deskripsi');
            $table->string('harga_tiket');
            $table->integer('total_rating')->nullable();
            $table->enum('status', ['approve', 'pending', 'reject']);
>>>>>>> bbb81f457511bd4d59967b68eed3cdaeb067bb5e
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

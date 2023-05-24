<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('gaji');
            $table->integer('umur');
            $table->integer('rating');
            $table->string('lokasi');
            $table->integer('durasi');
            $table->string('catatan')->nullable();
            $table->integer('harga');
            $table->string('no_telepon');
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
        Schema::dropIfExists('prts');
    }
}

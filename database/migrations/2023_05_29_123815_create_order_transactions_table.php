<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('prt_id');
            $table->date('tanggal_transaksi');
            $table->time('jam_kerja');
            $table->integer('durasi_kerja');
            $table->text('catatan_khusus')->nullable();
            $table->string('status_transaksi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('prt_id')->references('id')->on('prts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_transactions');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_payments', function (Blueprint $table) {
            $table->id();
            $table->string('kanal_pembayaran');
            $table->string('tipe_pembayaran');
            $table->string('nomor_pembayaran');
            $table->string('nama_pemilik');
            $table->text('instruksi_pembayaran');
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
        Schema::dropIfExists('info_payments');
    }
}

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('profile_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('header_image')->nullable();
            $table->string('profesi')->nullable(); // Kolom untuk menyimpan profesi
            $table->string('alamat')->nullable(); // Kolom untuk menyimpan alamat
            $table->date('tanggallahir')->nullable(); // Kolom untuk menyimpan tanggal lahir
            $table->rememberToken();
            $table->float('saldo')->default(0);
            $table->bigInteger('poin')->default(0)->change();
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
        Schema::dropIfExists('users');
    }
};


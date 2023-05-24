<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPrts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prts', function (Blueprint $table) {
            if (!Schema::hasColumn('prts', 'user_id')) {
                $table->unsignedBigInteger('user_id')->after('id'); // Menambahkan kolom user_id sebagai unsigned big integer
                $table->foreign('user_id')->references('id')->on('users'); // Menambahkan foreign key
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prts', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Menghapus foreign key
            $table->dropColumn('user_id'); // Menghapus kolom user_id
        });
    }
}

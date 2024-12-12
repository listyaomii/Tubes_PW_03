<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('password');
            $table->string('username')->unique();
            $table->string('nama_user');
            $table->string('jenis_kelamin'); //di ui ngga ada jenis_kelamin bejir, adanya alamat
            $table->string('email_user')->unique();
            $table->string('telp_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

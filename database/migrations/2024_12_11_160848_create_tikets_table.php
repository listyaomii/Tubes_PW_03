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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id('tiket_id');
            $table->string('kelas');
            $table->Integer('harga');
            $table->UnsignedBigInteger('id_penerbangan');         
            $table->timestamps();

            $table->foreign('id_penerbangan')->references('id_penerbangan')->on('penerbangans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};

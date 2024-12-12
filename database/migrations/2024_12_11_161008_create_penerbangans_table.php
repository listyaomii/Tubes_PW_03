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
        Schema::create('penerbangans', function (Blueprint $table) {
            $table->id('id_penerbangan');
            $table->string('bandara_asal');
            $table->string('bandara_tujuan');
            $table->date('tanggal');
            $table->string('maskapai');
            $table->time('waktu_keberangkatan');
            $table->time('waktu_kedatangan');
            $table->integer('durasi');               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerbangans');
    }
};

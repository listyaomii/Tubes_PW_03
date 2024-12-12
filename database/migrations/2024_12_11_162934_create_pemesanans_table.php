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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->UnsignedBigInteger('id_tiket');
            $table->UnsignedBigInteger('id_penumpang');
            $table->timestamps();

            $table->foreign('id_tiket')->references('tiket_id')->on('tikets')->onDelete('cascade');
            $table->foreign('id_penumpang')->references('id_penumpang')->on('penumpangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};

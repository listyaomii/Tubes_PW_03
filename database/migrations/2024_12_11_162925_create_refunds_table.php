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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id('id_refund');
            $table->UnsignedBigInteger('id_pemesanan');
            $table->Integer('Total_refund');
            $table->string('no_rekening');
            $table->timestamps();

            $table->foreign('id_pemesanan')
                  ->references('id_pemesanan')
                  ->on('pemesanans')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};

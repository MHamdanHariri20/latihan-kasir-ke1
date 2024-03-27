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
        Schema::create('detailpenjualan', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal', 10, 2);
            $table->integer('jumlahproduk');
            $table->foreignId('produkId');
            $table->foreignId('penjualanId');
            $table->timestamps();


            $table->foreign('penjualanId')->references('id')->on('penjualan')->onDelete('cascade');
            $table->foreign('produkId')->references('id')->on('produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualan');
    }
};

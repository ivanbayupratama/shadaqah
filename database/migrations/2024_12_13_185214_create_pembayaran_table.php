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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_user')->index()->nullable();
            $table->foreignId('id_metode')->index();
            $table->foreignId('id_campaign')->index();
            $table->integer('total_bayar');
            $table->string('catatan')->nullable();
            $table->date('tanggal_pembayaran');
            $table->string('ref_pembayaran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};

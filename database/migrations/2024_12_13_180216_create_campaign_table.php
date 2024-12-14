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
        Schema::create('campaign', function (Blueprint $table) {
            $table->id('id_campaign');
            $table->foreignId('id_user')->index()->nullable();
            $table->string('nama_campaign');
            $table->string('deskripsi')->nullable();
            $table->integer('target_dana')->nullable();
            $table->date('tgl_mulai');
            $table->date('tgl_berakhir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign');
    }
};

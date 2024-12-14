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
        Schema::create('dokumen_verifikasi', function (Blueprint $table) {
            $table->id('id_dokumen');
            $table->foreignId('id_user')->index();
            $table->string('jenis_dokumen');
            $table->string('file_dokumen');
            $table->date('tgl_unggah');
            $table->text('keterangan_revisi')->nullable();
            
        });


        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_verifikasi');
    }
};

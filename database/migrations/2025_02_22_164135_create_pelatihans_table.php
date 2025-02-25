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
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->constrainted('pegawais')->onDelete('cascade');
            $table->string('nama_pelatihan');
            $table->date('tanggal_pelatihan');
            $table->text('penyelenggara');
            $table->text('hasil_pelatihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihans');
    }
};

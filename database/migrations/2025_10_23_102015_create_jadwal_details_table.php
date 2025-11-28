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
        Schema::create('jadwal_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_id')->constrained('jadwal')->onDelete('cascade');
            $table->foreignId('prodi_id')->constrained('prodi');
            $table->foreignId('sesi_id')->constrained('sesi');
            $table->date('tgl_undangan');
            $table->date('tgl_toga');
            $table->string('tempat_ambil');
            $table->date('tanggal_pelaksanaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_detail');
    }
};

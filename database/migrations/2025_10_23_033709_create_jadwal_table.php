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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('thn_akademik', 10);
            $table->string('gelombang', 10);
            $table->date('awal_daftar');
            $table->date('akhir_daftar');
            $table->date('awal_bayar');
            $table->date('akhir_bayar');
            $table->date('awal_pengambilan');
            $table->date('akhir_pengambilan');
            $table->date('tgl_gladi');
            $table->date('awal_pelaksanaan');
            $table->date('akhir_pelaksanaan');
            $table->string('tempat_pelaksanaan', 255);
            $table->string('active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};

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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_id')->constrained('jadwal')->cascadeOnDelete();
            $table->string('nama_buku');
            $table->string('attachment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
        if (Schema::hasColumn('buku', 'attachment')) {
            $table->dropColumn('attachment');
        }
        });
    }
};

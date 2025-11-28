<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    public function jadwalDetails(): HasMany
    {
        return $this->hasMany(JadwalDetail::class);
    }
    public function tarif(): HasMany
    {
        return $this->hasMany(Tarif::class);
    }
    public function sesi(): HasMany
    {
        return $this->hasMany(Sesi::class);
    }
    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class);
    }
}

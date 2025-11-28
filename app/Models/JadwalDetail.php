<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JadwalDetail extends Model
{
    protected $table = 'jadwal_detail';
    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class);
    }
    public function sesi(): BelongsTo
    {
        return $this->belongsTo(Sesi::class);
    }
    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class)->orderBy('tingkat_id','asc',)->orderBy('fakultas_id','asc',)->orderBy('kode_prodi','asc',);
    }
}

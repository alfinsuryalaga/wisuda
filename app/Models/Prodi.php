<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    protected $table = 'prodi';
    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class)->orderBy('kode_fakultas', 'ASC');
    }
    public function tingkat(): BelongsTo
    {
        return $this->belongsTo(Tingkat::class);
    }
    public function jadwalDetail(): HasMany
    {
        return $this->hasMany(JadwalDetail::class);
    }
}

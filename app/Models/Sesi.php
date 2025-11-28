<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sesi extends Model
{
    protected $table = 'sesi';
    public function jadwalDetails(): HasMany
    {
        return $this->hasMany(JadwalDetail::class);
    }
    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class);
    }
}

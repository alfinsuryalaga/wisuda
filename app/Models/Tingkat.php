<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tingkat extends Model
{
    protected $table = 'tingkat';
    public function prodis(): HasMany
    {
        return $this->hasMany(Prodi::class);
    }
    public function tarif(): HasMany
    {
        return $this->hasMany(Tarif::class);
    }
}

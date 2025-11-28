<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    protected $table = 'buku';


    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class);
    }
}

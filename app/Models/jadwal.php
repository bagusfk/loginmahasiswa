<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    /**
     * Get the matakuliah that owns the jadwal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function matakuliah()
    {
        return $this->belongsTo('App\Models\Matakuliah');
    }
}

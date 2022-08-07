<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
    protected $table='matakuliahs';

    protected $fillable = [
        'name',
        'sks',
        'dosen',
    ];
    /**
     * Get all of the Jadwal for the matakuliah
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Jadwal()
    {
        return $this->hasMany(Jadwal::class, 'matakuliah_id', 'id');
    }
}

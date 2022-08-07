<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semester extends Model
{

    use HasFactory;
    protected $fillable = [
        'semester',
    ];

    // /**
    //  * Get all of the kontrak_kuliah for the semester
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function kontrak_matakuliah(): HasMany
    // {
    //     return $this->hasMany(KontrakMatakuliah::class, 'semester_id', 'id');
    // }
}

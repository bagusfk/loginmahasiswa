<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontrak_matakuliah extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the kontrak_matakuliah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'mahasiswa_id');
    }
    /**
     * Get the semester that owns the kontrak_matakuliah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }
}

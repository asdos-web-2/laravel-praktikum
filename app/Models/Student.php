<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    
    public function majors(): BelongsTo
    {
        return $this->belongsTo(Majors::class, "major_id");
    }

    protected $fillable = [
        'name',
        'student_id_number',
        'email',
        'phone_number',
        'birth_date',
        'gender',
        'status',
        'major_id'
    ];
}

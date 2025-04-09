<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'student_id_number', 
        'email',
        'phone_number',
        'birth_date',
        'gender',
        'major',
        'status',
    ];      
}


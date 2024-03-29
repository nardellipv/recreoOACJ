<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_teacher', 'dni_teacher', 'space','level_teacher',
        'other_school','name_school_teacher', 'phone_teacher', 'email_teacher', 'first_time_teacher', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

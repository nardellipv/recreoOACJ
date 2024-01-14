<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_student', 'dni_student', 'birth_date', 'genre', 'phone_student', 'email_student',
        'classroom', 'level_student', 'first_note', 'second_note', 'total', 'first_time_student', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Region()
    {
        return $this->belongsTo(Region::class);
    }
}

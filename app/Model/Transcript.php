<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transcript extends Model
{
    protected $table = 'transcript';
    protected $fillable = [
        'teacher', 'class', 'student', 'subject', 'point', 'time',
    ];
}

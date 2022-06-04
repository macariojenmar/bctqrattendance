<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'idNum',
        'name',
        'email',
        'guardian',
        'guardianemail',
        'user',
        'student',
        'classTitle'
        
    ];

}

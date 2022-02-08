<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklists';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'strand',
        'grade',
        'schedule',
        'late',
        'start',
        'end'
    ];
}

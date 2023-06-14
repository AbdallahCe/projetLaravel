<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    protected $table = 'emplois';

    protected $fillable = [
        'classe',
        'teacher',
        'image'
    ];
}

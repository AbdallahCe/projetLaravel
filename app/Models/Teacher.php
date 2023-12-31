<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'speciality',
        'uemail',
        'upassword',
    ];
}

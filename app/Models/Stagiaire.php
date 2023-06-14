<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $table = 'stagiaires';

    protected $fillable = [
        'cef',
        'first_name',
        'last_name',
        'address',
        'phone',
        'gender',
        'email',
        'filiere',
        'birthday',
        'uemail',
        'upassword',
    ];
}

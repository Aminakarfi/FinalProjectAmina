<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'image',
        'start_time',
        'end_time',
    ];
}

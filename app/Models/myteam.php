<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myteam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jabatan',
        'moto',
        'path_image',
    ];
}



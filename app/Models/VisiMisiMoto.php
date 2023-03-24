<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisiMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'visi',
        'misi',
        'moto',
        'path_image',
    ];
}

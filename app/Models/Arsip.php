<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_kk',
        'no_ktp',
        'file_kk',
        'file_ktp',
    ];
}

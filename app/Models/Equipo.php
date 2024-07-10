<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa', 'tipo', 'marca', 'modelo', 'serial',
        'procesador', 'ram', 'storage', 'so'
    ];
}
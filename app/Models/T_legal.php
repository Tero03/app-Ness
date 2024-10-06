<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_legal extends Model
{
    use HasFactory;

    protected $fillable=[
        "nombre",
        "apellido",
        "telefono",
        "correo",
        "documento",
        "id_persona"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol_jugador extends Model
{
    use HasFactory;

    protected $fillable=[
        "id_posicion",
        "nombre",
        "id_jugador"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado_partido extends Model
{
    use HasFactory;

    protected $fillable=[
        "marcador",
        "resultado_partido",
        "id_partido",
        "id_jugador"
    ];
}

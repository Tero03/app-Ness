<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_prueba extends Model
{
    use HasFactory;

    protected $fillable=[
        "fecha",
        "numero_sesion",
        "id_persona",
        "id_Pfisica",
        "id_Ptecnica",
        "id_Pgrupos"
    ];
}

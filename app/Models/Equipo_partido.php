<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo_partido extends Model
{
    use HasFactory;

    protected $fillable=[
        "id_equipo",
        "id_partido"
    ];
}

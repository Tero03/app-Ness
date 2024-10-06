<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_fisica extends Model
{
    use HasFactory;

    protected $fillable=[
        "sprint_40m",
        "sprint_30m",
        "peso_muerto",
        "sentadillas",
        "agilidad_t",
        "agilidad_l",
        "flex_tronco",
        "isquiotibiales",
        "salto_vertical",
        "salto_horizontal",
        "id_persona"
    ];
}

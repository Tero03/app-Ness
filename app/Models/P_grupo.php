<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_grupo extends Model
{
    use HasFactory;

    protected $fillable=[
        "pases_cortos_largos",
        "control_movimiento",
        "control_aereo",
        "pases_cortos",
        "pases_largos",
        "pases_movimiento",
        "recepciones_bajo_presion",
        "cabeceo_puerta",
        "cabeceo_defensivo",
        "cabeceo_movimiento",
        "duelos_aereos",
        "cabeceo_1v1",
        "tackles_entradas_limpias",
        "intercepciones_pase",
        "marcaje_individual_zonal",
        "recuperacion_balon",
        "transicion_defensa_ataque",
        "habilidades_pies_porteros",
        "id_persona"
    ];
}

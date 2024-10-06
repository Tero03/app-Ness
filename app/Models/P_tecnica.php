<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_tecnica extends Model
{
    use HasFactory;

    protected $fillable=[
            "centros_remates_delanteros_extremos",
            "marcaje_individual_zonal",
            "dribbling_conos",
            "dribbling_espacio_reducido",
            "dribbling_velocidad_maxima",
            "dribbling_cambio_direccionYritmo",
            "tiro_arco_distancia",
            "tiro_arco_angulo",
            "tiro_arco_precision_potencia",
            "tiro_arco_movimiento",
            "id_persona"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class H_deportivo extends Model
{
    use HasFactory;

    protected $fillable=[
        "institucion",
        "posicion",
        "resultado",
        "id_persona"
    ]; 
}

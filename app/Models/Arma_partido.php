<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arma_partido extends Model
{
    use HasFactory;

    protected $fillable=[
        "fecha",
        "id_tipo_partido"
    ];
}

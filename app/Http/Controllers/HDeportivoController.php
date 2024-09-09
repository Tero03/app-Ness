<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HDeportivoController extends Controller
{
    public function getData(Request $request){
        $rta=10+20;
        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito historial deportivo',
            'result'=>$rta
        ]);
    }
    public function save(Request $request){
        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito historial deportivo',
        ]);
    }
    public function update(Request $request){
        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito historial deportivo',
        ]);
    }
    public function delete(Request $request){
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito historial deportivo',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\H_deportivo;

class HDeportivoController extends Controller
{
    public function getData(Request $request){
        
        $h_deportivo=H_deportivo::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito historial deportivo',
            'result'=>$h_deportivo
        ]);
    }

    public function save(Request $request){

        $h_deportivo=H_deportivo::create([
            "institucion"=>$request->institucion,
            "posicion"=>$request->posicion,
            "resultado"=>$request->resultado,
            "id_persona"=>$request->id_persona,
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito historial deportivo',
        ]);
    }

    public function update(Request $request){

        $h_deportivo=H_deportivo::FindOrFail($request->id);
        $h_deportivo->update([
            "institucion"=>$request->institucion,
            "posicion"=>$request->posicion,
            "resultado"=>$request->resultado
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito historial deportivo',
        ]);
    }

    public function delete(Request $request){ 

        $h_deportivo=H_deportivo::FindOrFail($request->id);
        $h_deportivo->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito historial deportivo',
        ]);
    }
}

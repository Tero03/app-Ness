<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\P_psicologica;

class PPsicologicaController extends Controller
{
    public function getData(Request $request){

        $Ppsicologica=P_psicologica::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito prueba psicologica',
            'result'=>$Ppsicologica
        ]);
    }

    public function save(Request $request){

        $Ppsicologica=P_psicologica::create([
            "resultado1"=>$request->resultado1,
            "resultado2"=>$request->resultado2,
            "resultado3"=>$request->resultado3,
            "resultado4"=>$request->resultado4,
            "resultado5"=>$request->resultado5,
            "resultado6"=>$request->resultado6,
            "id_persona"=>$request->id_persona
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito prueba psicologica',
        ]);
    }

    public function update(Request $request){

        $Ppsicologica=P_psicologica::FindOrFail($request->id);
        $Ppsicologica->update([
            "resultado1"=>$request->resultado1,
            "resultado20"=>$request->resultado2,
            "resultado3"=>$request->resultado3,
            "resultado4"=>$request->resultado4,
            "resultado5"=>$request->resultado5,
            "resultado6"=>$request->resultado6
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito prueba psicologica',
        ]);
    }

    public function delete(Request $request){

        $Ppsicologica=P_psicologica::FindOrFail($request->id);
        $Ppsicologica->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito prueba psicologica',
        ]);
    }
}

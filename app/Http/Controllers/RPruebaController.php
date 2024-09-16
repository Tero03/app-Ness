<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\R_prueba;

class RPruebaController extends Controller
{
    public function getData(Request $request){

        $Rprueba=R_prueba::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito resultado de las pruebas',
            'result'=>$Rprueba
        ]);
    }

    public function save(Request $request){

        $Rprueba=R_prueba::create([
            "fecha"=>$request->fecha,
            "numero_sesion"=>$request->numero_sesion,
            "id_persona"=>$request->id_persona,
            "id_Pfisica"=>$request->id_Pfisica,
            "id_Ptecnica"=>$request->id_Ptecnica,
            "id_Pgrupos"=>$request->id_Pgrupos
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito resultado de las pruebas',
        ]);
    }

    public function update(Request $request){

        $Rprueba=R_prueba::FindOrFail($request->id);
        $Rprueba->update([
            "fecha"=>$request->fecha,
            "numero_sesion"=>$request->numero_sesion,
            "id_persona"=>$request->id_persona,
            "id_Pfisica"=>$request->id_Pfisica,
            "id_Ptecnica"=>$request->id_Ptecnica,
            "id_Pgrupos"=>$request->id_Pgrupos
        ]);
        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito resultado de las pruebas',
        ]);
    }

    public function delete(Request $request){

        $Rprueba=R_prueba::FindOrFail($request->id);
        $Rprueba->delete();
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito resultado de las pruebas',
        ]);
    }
}

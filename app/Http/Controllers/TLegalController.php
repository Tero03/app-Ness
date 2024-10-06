<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\T_legal;

class TLegalController extends Controller
{
    public function getData(Request $request){
        
        $tutorLegal=T_legal::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito tutor legal',
            'result'=>$tutorLegal
        ]);
    }

    public function save(Request $request){

        $tutorLegal=T_legal::create([
            "nombre"=>$request->nombre,
            "apellido"=>$request->apellido,
            "telefono"=>$request->telefono,
            "correo"=>$request->correo,
            "documento"=>$request->documento,
            "id_persona"=>$request->id_persona
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito tutor legal',
        ]);
    }

    public function update(Request $request){

        $tutorLegal=T_legal::FindOrFail($request->id);
        $tutorLegal->update([
            "nombre"=>$request->nombre,
            "apellido"=>$request->apellido,
            "telefono"=>$request->telefono,
            "correo"=>$request->correo,
            "documento"=>$request->documento
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito tutor legal',
        ]);
    }

    public function delete(Request $request){

        $tutor_legal=T_legal::FindOrFail($request->id);
        $tutor_legal->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito tutor legal',
        ]);
    }
}

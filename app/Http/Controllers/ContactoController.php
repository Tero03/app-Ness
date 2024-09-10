<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function getData(Request $request){
        $contacto=Contacto::all();
        
        return response()->json([
            'message'=>'Datos obtenidos con exito contacto',
            'result'=>$contacto
        ]);
    }
    public function save(Request $request){

        $contactos=Contacto::create([
            "telefono"=>$request->telefono,
            "correo"=>$request->correo,
            "id_persona"=>$request->id_persona
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito contacto',
            "Rta datos"=>$contactos
        ]);
    }
    public function update(Request $request){
        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito contacto',
        ]);
    }
    public function delete(Request $request){
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito contacto',
        ]);
    }
}

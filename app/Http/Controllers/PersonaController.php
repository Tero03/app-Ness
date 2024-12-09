<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller{
    public function getData(Request $request){
        
        $miPersona=Persona::all();

        return response()->json([
            'message'=>'Datos obtenidos con exito',
            'result'=>$miPersona
        ]);
    }

    public function getDataById(Request $request){
        
        $miPersona=Persona::where('id',$request->id)->get();

        return response()->json([
            'message'=>'Datos obtenidos con exito',
            'result'=>$miPersona
        ]);
    }

    public function save(Request $request){

        $miPersona=Persona::create([
            "nombre"=>$request->nombre,
            "apellido"=>$request->apellido,
            "edad"=>$request->edad,
            "peso"=>$request->peso,
            "altura"=>$request->altura,
        ]);

        return response()->json([
            "rta"=>$miPersona
        ]);
    }

    public function update(Request $request){
        
        $miPersona=Persona::FindOrFail($request->id);
        $miPersona->update([
            "nombre"=>$request->nombre,
            "apellido"=>$request->apellido,
            "edad"=>$request->edad,
            "peso"=>$request->peso,
            "altura"=>$request->altura,
        ]);

        return response()->json([
            'message'=>'Datos actualizados con exito',
            
        ]);
    }

    public function delete(Request $request){

        //$miPersona=Persona::Find($request->id);
        // if($miPersona){

        //     $miPersona->delete();
        //     return response()->json([
        //         'message'=>'Datos eliminados con exito'
        //     ]);
        // }else{
        //     return response()->json([
        //         'message'=>'Los datos de esta id no existen',
        //     ]);

        // }
        $miPersona=Persona::FindOrFail($request->id);
        $miPersona->delete();

        return response()->json([
            "serverStatus"=>"200",
            "message"=>"Datos eliminados Correctamente"
        ]);
    }
}

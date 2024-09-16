<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol_jugador;

class RolJugadorController extends Controller
{
    public function getData(Request $request){

        $Rjugador=Rol_jugador::all();
        ;
        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito rol jugador',
            'result'=>$Rjugador
        ]);
    }

    public function save(Request $request){

        $Rjugador=Rol_jugador::create([
            "id_posicion"=>$request->id_posicion,
            "nombre"=>$request->nombre,
            "id_jugador"=>$request->id_jugador
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito rol jugador',
        ]);
    }

    public function update(Request $request){

        $Rjugador=Rol_jugador::FindOrFail($request->id);
        $Rjugador=Rol_jugador::update([
            "id_posicion"=>$request->id_posicion,
            "nombre"=>$request->nombre
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito rol jugador',
        ]);
    }

    public function delete(Request $request){

        $Rjugador=Rol_jugador::FindOrFail($request->id);
        $Rjugador->delete();
        
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito rol jugador',
        ]);
    }
}

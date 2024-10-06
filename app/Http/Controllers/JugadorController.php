<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function getData(Request $request){

        $jugador=Jugador::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito jugadores',
            'result'=>$jugador
        ]);
    }

    public function save(Request $request){

        $jugador=Jugador::create([
            "numero_jugador"=>$request->numero_jugador,
            "id_persona"=>$request->id_persona,
            "id_equipo"=>$request->id_equipo,
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito jugadores',
        ]);
    }

    public function update(Request $request){

        $jugador=Jugador::FindOrFail($request->id);
        $jugador->update([
            "numero_jugador"=>$request->numero_jugador,
            "id_equipo"=>$request->id_equipo
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito jugadores',
        ]);
    }

    public function delete(Request $request){

        $jugador=Jugador::FindOrFail($request->id);
        $jugador->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito jugadores',
        ]);
    }
}

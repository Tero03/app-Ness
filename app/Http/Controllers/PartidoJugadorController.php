<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partido_jugador;


class PartidoJugadorController extends Controller
{
    public function getData(Request $request){
        
        $partidoJugador=Partido_jugador::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito partido jugador',
            'result'=>$partidoJugador
        ]);
    }

    public function save(Request $request){

        $partidoJugador=Partido_jugador::create([
            "id_jugador"=>$request->id_jugador,
            "id_jugador"=>$request->id->jugador
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito partido jugador',
        ]);
    }

    public function update(Request $request){

        //es necesario este update?
        $partidoJugador=Partido_jugador::FindOrFail($request->id);
        $partidoJugador->update([
            "id_partido",
            "id_jugador"
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito partido jugador',
        ]);
    }

    public function delete(Request $request){

        $partidoJugador=Partido_jugador::FindOrFail();
        $partidoJugador->delete();
        
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito partido jugador',
        ]);
    }
}

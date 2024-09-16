<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resultado_partido;

class ResultadoPartidoController extends Controller
{
    public function getData(Request $request){
        
        $Rpartido=Resultado_partido::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito resultado del partido',
            'result'=>$Rpartido 
        ]);
    }

    public function save(Request $request){

        $Rpartido=Resultado_partido::create([
            "marcador"=>$request->marcador,
            "resultado_partido"=>$request->resultado_partido,
            "id_partido"=>$request->id_partido,
            "id_jugador"=>$request->id_jugador
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito resultado del partido',
        ]);
    }

    public function update(Request $request){

        $Rpartido=Resultado_partido::FindOrFail($request->id);
        $Rpartido=Resultado_partido::create([
            "marcador"=>$request->marcador,
            "resultado_partido"=>$request->resultado_partido,
            "id_jugador"=>$request->id_jugador
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito resultado del partido',
        ]);
    }

    public function delete(Request $request){

        $Rpartido=Resultado_partido::FindOrFail($request->id);
        $Rpartido->delete();
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito resultado del partido',
        ]);
    }
}

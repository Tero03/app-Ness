<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arma_partido;

class ArmaPartidoController extends Controller
{
    public function getData(Request $request){

        $armaPartido=Arma_partido::all();

        return response()->json([
            'message'=>'Datos obtenidos con exito arma partidos',
            'result'=>$armaPartido
        ]);
    }

    public function save(Request $request){

        $armaPartido=Arma_partido::create([
            "fecha"=>$request->fecha,
            "id_tipo_partido"=>$request->id_tipo_partido,
        ]);
        
        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito arma partidos',
        ]);
    }

    public function update(Request $request){

        $armaPartido=Arma_partido::FindOrFail($request->id);
        $armaPartido->update([
            "fecha"=>$request->fecha,
            "id_tipo_partido"=>$request->id_tipo_partido
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito arma partidos',
        ]);
    }

    public function delete(Request $request){

        $armaPartido=Arma_partido::FindOrFail($request->id);
        $armaPartido->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito arma partidos',
        ]);
    }
}

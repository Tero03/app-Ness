<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo_partido;

class EquipoPartidoController extends Controller
{
    public function getData(Request $request){

        $equipoPartido=Equipo_partido::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito equipo partido',
            'result'=>$equipoPartido
        ]);
    }

    public function save(Request $request){

        $equipoPartido=Equipo_partido::create([
            "id_equipo"=>$request->id_equipo,
            "id_partido"=>$request->id_partido
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito equipo partido',
        ]);
    }

    public function update(Request $request){

        $equipoPartido=Equipo_partido::FindOrFail($request->id);
        $equipoPartido->update([
            "id_equipo"=>$request->id_equipo,
            "id_partido"=>$request->id_partido
        ]);//comprobar si es necesario este update "actualizar id"

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito equipo partido',
        ]);
    }

    public function delete(Request $request){

        $equipoPartido=Equipo_partido::FindOrFail($request->id);
        $equipoPartido->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito equipo partido',
        ]);
    }
}

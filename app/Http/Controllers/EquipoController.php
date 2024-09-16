<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function getData(Request $request){

        $equipo=Equipo::all();

        return response()->json([
            'message'=>'Datos obtenidos con exito equipos',
            'result'=>$equipo
        ]);
    }

    public function save(Request $request){

        $equipo=Equipo::create([
            "numeroEquipo"=>$request->numeroEquipo,
            "nombre"=>$request->nombre,
            "entrenador"=>$request->entrenador
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito equipos',
            "result"=>$equipo
        ]);
    }

    public function update(Request $request){

        $equipo=Equipo::FindOrFail($request->id);
        $equipo->update([
            "numeroEquipo"=>$request->numeroEquipo,
            "nombre"=>$request->nombre,
            "entrenador"=>$request->entrenador
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito equipos',
        ]);
    }

    public function delete(Request $request){

        $equipo=Equipo::FindOrFail($request->id);
        $equipo->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito equipos',
        ]);
    }
}

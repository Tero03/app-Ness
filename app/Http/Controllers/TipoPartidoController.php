<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_partido;

class TipoPartidoController extends Controller
{
    public function getData(Request $request){

        $tipoPartido=Tipo_partido::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito tipo de partido',
            'result'=>$tipoPartido
        ]);
    }
    public function save(Request $request){

        $tipoPartido=Tipo_partido::create([
            "tipo_partido"=>$request->tipo_partido
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito tipo de partido',
        ]);
    }
    public function update(Request $request){

        $tipoPartido=Tipo_partido::FindOrFail($request->id);
        $tipoPartido->update([
            "tipo_partido"=>$request->tipo_partido
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito tipo de partido',
        ]);
    }
    public function delete(Request $request){

        $tipoPartido=Tipo_partido::FindOrFail($request->id);
        $tipoPartido->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito tipo de partido',
        ]);
    }
}

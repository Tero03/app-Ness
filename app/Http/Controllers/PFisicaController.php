<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\P_fisica;

class PFisicaController extends Controller
{
    public function getData(Request $request){
        
        $Pfisica=P_fisica::all();
        
        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito pruebas fisicas',
            'result'=>$Pfisica
        ]);
    }

    public function getDataById(Request $request){
        
        $Pfisica=P_fisica::where('id',$request->id)->get();

        return response()->json([
            'message'=>'Datos obtenidos con exito',
            'result'=>$Pfisica
        ]);
    }

    public function save(Request $request){

        $Pfisica=P_fisica::create([
            "sprint_40m"=>$request->sprint_40m,
            "sprint_30m"=>$request->sprint_30m,
            "peso_muerto"=>$request->peso_muerto,
            "sentadillas"=>$request->sentadillas,
            "agilidad_t"=>$request->agilidad_t,
            "agilidad_l"=>$request->agilidad_l,
            "flex_tronco"=>$request->flex_tronco,
            "isquiotibiales"=>$request->isquiotibiales,
            "salto_vertical"=>$request->salto_vertical,
            "salto_horizontal"=>$request->salto_horizontal,
            "id_persona"=>$request->id_persona
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito pruebas fisicas',
        ]);
    }

    public function update(Request $request){

        $Pfisica=P_fisica::FindOrFail($request->id);
        $Pfisica->update([
            "sprint_40m"=>$request->sprint_40m,
            "sprint_30m"=>$request->sprint_30m,
            "peso_muerto"=>$request->peso_muerto,
            "sentadillas"=>$request->sentadillas,
            "agilidad_t"=>$request->agilidad_t,
            "agilidad_l"=>$request->agilidad_l,
            "flex_tronco"=>$request->flex_tronco,
            "isquiotibiales"=>$request->isquiotibiales,
            "salto_vertical"=>$request->salto_vertical,
            "salto_horizontal"=>$request->salto_horizontal
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito pruebas fisicas',
        ]);
    }

    public function delete(Request $request){

        $Pfisica=P_fisica::FindOrFail($request->id);
        $Pfisica->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito pruebas fisicas',
        ]);
    }
}

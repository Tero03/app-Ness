<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\P_grupo;

class PGrupoController extends Controller
{
    public function getData(Request $request){

        $Pgrupo=P_grupo::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito pruebas en grupo',
            'result'=>$Pgrupo
        ]);
    }

    public function save(Request $request){

        $Pgrupo=P_grupo::create([
            "pases_cortos_largos"=>$request->pases_cortos_largos,
            "control_movimiento"=>$request->control_movimiento,
            "control_aereo"=>$request->control_aereo,
            "pases_cortos"=>$request->pases_cortos,
            "pases_largos"=>$request->pases_largos,
            "pases_movimiento"=>$request->pases_movimiento,
            "recepciones_bajo_presion"=>$request->recepciones_bajo_presion,
            "cabeceo_puerta"=>$request->cabeceo_puerta,
            "cabeceo_defensivo"=>$request->cabeceo_defensivo,
            "cabeceo_movimiento"=>$request->cabeceo_movimiento,
            "duelos_aereos"=>$request->duelos_aereos,
            "cabeceo_1v1"=>$request->cabeceo_1v1,
            "tackles_entradas_limpias"=>$request->tackles_entradas_limpias,
            "intercepciones_pase"=>$request->intercepciones_pase,
            "marcaje_individual_zonal"=>$request->marcaje_individual_zonal,
            "recuperacion_balon"=>$request->recuperacion_balon,
            "transicion_defensa_ataque"=>$request->transicion_defensa_ataque,
            "habilidades_pies_porteros"=>$request->habilidades_pies_porteros,
            "id_persona"=>$request->id_persona
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito pruebas en grupo',
        ]);
    }

    public function update(Request $request){

        $Pgrupo=P_grupo::FindOrFail($request->id);
        $Pgrupo->update([
        "pases_cortos_largos"=>$request->pases_cortos_largos,
        "control_movimiento"=>$request->control_movimiento,
        "control_aereo"=>$request->control_aereo,
        "pases_cortos"=>$request->pases_cortos,
        "pases_largos"=>$request->pases_largos,
        "pases_movimiento"=>$request->pases_movimiento,
        "recepciones_bajo_presion"=>$request->recepciones_bajo_presion,
        "cabeceo_puerta"=>$request->cabeceo_puerta,
        "cabeceo_defensivo"=>$request->cabeceo_defensivo,
        "cabeceo_movimiento"=>$request->cabeceo_movimiento,
        "duelos_aereos"=>$request->duelos_aereos,
        "cabeceo_1v1"=>$request->cabeceo_1v1,
        "tackles_entradas_limpias"=>$request->tackles_entradas_limpias,
        "intercepciones_pase"=>$request->intercepciones_pase,
        "marcaje_individual_zonal"=>$request->marcaje_individual_zonal,
        "recuperacion_balon"=>$request->recuperacion_balon,
        "transicion_defensa_ataque"=>$request->transicion_defensa_ataque,
        "habilidades_pies_porteros"=>$request->habilidades_pies_porteros
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito pruebas en grupo',
        ]);
    }

    public function delete(Request $request){

        $Pgrupo=P_grupo::FindOrFail($request->id);
        $Pgrupo->delete();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito pruebas en grupo',
        ]);
    }
}

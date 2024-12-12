<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\P_tecnica;

class PTecnicaController extends Controller
{
    public function getData(Request $request){

        $Ptecnica=P_tecnica::all();

        return response()->json([
            'status'=>'200',
            'message'=>'Datos obtenidos con exito pruebas tecnicas',
            'result'=>$Ptecnica
        ]);
    }

    public function getDataById(Request $request){
        
        $Ptecnica=P_tecnica::where('id',$request->id)->get();

        return response()->json([
            'message'=>'Datos obtenidos con exito',
            'result'=>$Ptecnica
        ]);
    }

    public function save(Request $request){

        $Ptecnica=P_tecnica::create([
            "centros_remates_delanteros_extremos"=>$request->centros_remates_delanteros_extremos,
            "marcaje_individual_zonal"=>$request->marcaje_individual_zonal,
            "dribbling_conos"=>$request->dribbling_conos,
            "dribbling_espacio_reducido"=>$request->dribbling_espacio_reducido,
            "dribbling_velocidad_maxima"=>$request->dribbling_velocidad_maxima,
            "dribbling_cambio_direccionYritmo"=>$request->dribbling_cambio_direccionYritmo,
            "tiro_arco_distancia"=>$request->tiro_arco_distancia,
            "tiro_arco_angulo"=>$request->tiro_arco_angulo,
            "tiro_arco_precision_potencia"=>$request->tiro_arco_precision_potencia,
            "tiro_arco_movimiento"=>$request->tiro_arco_movimiento,
            "id_persona"=>$request->id_persona
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos guardados con exito pruebas tecnicas',
        ]);
    }

    public function update(Request $request){

        $Ptecnica=P_tecnica::findorfail($request->id);
        $Ptecnica->update([
            "centros_remates_delanteros_extremos"=>$request->centros_remates_delanteros_extremos,
            "marcaje_individual_zonal"=>$request->marcaje_individual_zonal,
            "dribbling_conos"=>$request->dribbling_conos,
            "dribbling_espacio_reducido"=>$request->dribbling_espacio_reducido,
            "dribbling_velocidad_maxima"=>$request->dribbling_velocidad_maxima,
            "dribbling_cambio_direccionYritmo"=>$request->dribbling_cambio_direccionYritmo,
            "tiro_arco_distancia"=>$request->tiro_arco_distancia,
            "tiro_arco_angulo"=>$request->tiro_arco_angulo,
            "tiro_arco_precision_potencia"=>$request->tiro_arco_precision_potencia,
            "tiro_arco_movimiento"=>$request->tiro_arco_movimiento
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'Datos actualizados con exito pruebas tecnicas',
        ]);
    }

    public function delete(Request $request){

        $Ptecnica=P_tecnica::findorfail($request->id);
        $Ptecnica->delete();
        
        return response()->json([
            'status'=>'200',
            'message'=>'Datos eliminados con exito pruebas tecnicas',
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('p_tecnicas', function (Blueprint $table) {
            $table->id();
            $table->string('centros_remates_delanteros_extremos');
            $table->string('marcaje_individual_zonal'); 
            $table->string('dribbling_conos'); 
            $table->string('dribbling_espacio_reducido'); 
            $table->string('dribbling_velocidad_maxima'); 
            $table->string('dribbling_cambio_direccionYritmo'); 
            $table->string('tiro_arco_distancia'); 
            $table->string('tiro_arco_angulo'); 
            $table->string('tiro_arco_precision_potencia'); 
            $table->string('tiro_arco_movimiento'); 
            $table->unsignedBigInteger('id_persona');
 
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_tecnicas');
    }
};

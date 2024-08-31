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
        Schema::create('p_grupos', function (Blueprint $table) {
            $table->id();
            $table->string('pases_cortos_largos');
            $table->string('control_movimiento');
            $table->string('control_aereo');
            $table->string('pases_cortos');
            $table->string('pases_largos');
            $table->string('pases_movimiento');
            $table->string('recepciones_bajo_presion');
            $table->string('cabeceo_puerta');
            $table->string('cabeceo_defensivo');
            $table->string('cabeceo_movimiento');
            $table->string('duelos_aereos');
            $table->string('cabeceo_1v1');
            $table->string('tackles_entradas_limpias');
            $table->string('intercepciones_pase');
            $table->string('marcaje_individual_zonal');
            $table->string('recuperacion_balon');
            $table->string('transicion_defensa_ataque');
            $table->string('habilidades_pies_porteros');
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
        Schema::dropIfExists('p_grupos');
    }
};

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
        Schema::create('resultado_partidos', function (Blueprint $table) {
            $table->id();
            $table->string('marcador');
            $table->string('resultado_partido');
            $table->unsignedBigInteger('id_partido');
            $table->unsignedBigInteger('id_jugador');
 
            $table->foreign('id_partido')->references('id')->on('arma_partidos');
            $table->foreign('id_jugador')->references('id')->on('jugadors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultado_partidos');
    }
};

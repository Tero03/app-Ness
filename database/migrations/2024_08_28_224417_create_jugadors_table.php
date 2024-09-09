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
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->string('numero_jugador');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_equipo');

            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_equipo')->references('id')->on('equipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugdors');
    }
};

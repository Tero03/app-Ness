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
        Schema::create('rol_jugadors', function (Blueprint $table) {
            $table->id();
            $table->integer('id_posicion');
            $table->string('nombre');
            $table->unsignedBigInteger('id_jugador');
 
            $table->foreign('id_jugador')->references('id')->on('jugadors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_jugadors');
    }
};

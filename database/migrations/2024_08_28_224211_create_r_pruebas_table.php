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
        Schema::create('r_pruebas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('numero_sesion');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_Pfisica');
            $table->unsignedBigInteger('id_Ptecnica');
            $table->unsignedBigInteger('id_Pgrupos');

            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_Pfisica')->references('id')->on('p_fisicas');
            $table->foreign('id_Ptecnica')->references('id')->on('p_tecnicas');
            $table->foreign('id_Pgrupos')->references('id')->on('p_grupos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_pruebas');
    }
};

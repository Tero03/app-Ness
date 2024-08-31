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
        Schema::create('p_psicologicas', function (Blueprint $table) {
            $table->id();
            $table->string('resultado1');
            $table->string('resultado2');
            $table->string('resultado3');
            $table->string('resultado4');
            $table->string('resultado5');
            $table->string('resultado6');
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
        Schema::dropIfExists('p_psicologicas');
    }
};

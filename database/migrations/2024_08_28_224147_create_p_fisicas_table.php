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
        Schema::create('p_fisicas', function (Blueprint $table) {
            $table->id();
            $table->string('sprint_40m');//revisar si es necesario recibir los datos como integer
            $table->string('sprint_30m');
            $table->string('peso_muerto');
            $table->string('sentadillas');
            $table->string('agilidad_t');
            $table->string('agilidad_l');
            $table->string('flex_tronco');
            $table->string('isquiotibiales');
            $table->string('salto_vertical');
            $table->string('salto_horizontal');
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
        Schema::dropIfExists('p_fisicas');
    }
};

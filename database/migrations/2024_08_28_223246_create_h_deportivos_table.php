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
        Schema::create('h_deportivos', function (Blueprint $table) {
            $table->id();
            $table->string('institucion');
            $table->string('posicion');
            $table->string('resultado');
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
        Schema::dropIfExists('h_deportivos');
    }
};

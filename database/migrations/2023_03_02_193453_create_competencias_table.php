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
        Schema::create('competencias', function (Blueprint $table) {
            $table->id();
            $table->string('competencias_Codigo')->unique();
            $table->string("Nombre_competencia");
            $table->string("Duracion_competencia");
            $table->string("programas_Codigo");
            $table->foreign("programas_Codigo")->references("programas_Codigo")->on("programas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencias');
    }
};

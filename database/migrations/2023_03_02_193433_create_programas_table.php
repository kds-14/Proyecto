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
        Schema::create('programas', function (Blueprint $table) {
            
            $table->string("programas_Codigo")->primary();
            $table->string("Nombre_programa");
            $table->string("Version");
            $table->string("Nivel_formación");
            $table->string("Duracion_maxima");
            $table->string("Tipo_de_Formacion");
            $table->string("Estado");
            $table->string('Codigo_area');
            $table->foreign('Codigo_area')->references('Codigo_area')->on('area_tematicas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};

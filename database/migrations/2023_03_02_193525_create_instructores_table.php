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
        Schema::create('instructores', function (Blueprint $table) {
            $table->string('Tipo_Documento'); 
            $table->string('Nro_Doc',10)->primary();  
            $table->string('Nombres',60);
            $table->string('Apellidos',60);
            $table->string('Correo_Electronico',60);
            $table->string('Estado');
            $table->string('Codigo_red');
            $table->string('Codigo_area');
            $table->foreign('Codigo_red')->references('Codigo_red')->on('red_tematicas');
            $table->foreign('Codigo_area')->references('Codigo_area')->on('area_tematicas');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructores');
    }
};

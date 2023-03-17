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
        Schema::create('semaforos', function (Blueprint $table) {
            $table->char("Intensidad_diaria",3);
            $table->string("Trimestre",30);
            $table->string("programas_Codigo");
            $table->string("Nro_ficha");
            $table->string("competencias_Codigo");
            $table->string("resultados_Codigo");
            $table->foreign("programas_Codigo")->references("programas_Codigo")->on("programas");
            $table->foreign("Nro_ficha")->references("Nro_ficha")->on("fichas");
            $table->foreign("competencias_Codigo")->references("competencias_Codigo")->on("competencias");
            $table->foreign("resultados_Codigo")->references("Codigo")->on("resultados");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semaforos');
    }
};

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
        Schema::create('calendarios', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha_inicio');
            $table->date('Fecha_fin');
            $table->string('Hora');

            $table->string("programas_Codigo");
            $table->string("ambientes_Nro_ambi");
            $table->string("instructores_Nro_Doc");
            $table->string("Codigo_sede");
            $table->string("competencias_Codigo");
            $table->string("Nro_ficha");
            
            $table->foreign("programas_Codigo")->references("programas_Codigo")->on("programas");
            $table->foreign("ambientes_Nro_ambi")->references("Nro_ambi")->on("ambientes");
            $table->foreign("instructores_Nro_Doc")->references("Nro_Doc")->on("instructores");
            $table->foreign("Codigo_sede")->references("Codigo_sede")->on("sedes");
            $table->foreign("competencias_Codigo")->references("competencias_Codigo")->on("competencias");
            $table->foreign("Nro_ficha")->references("Nro_ficha")->on("fichas");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendarios');
    }
};

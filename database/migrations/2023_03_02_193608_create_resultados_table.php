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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo')->unique();
            $table->string("Nombre_resul");
            $table->string("competencias_Codigo");
            $table->string("programas_Codigo");
            $table->foreign("competencias_Codigo")->references("competencias_Codigo")->on("competencias");
            $table->foreign("programas_Codigo")->references("programas_Codigo")->on("programas");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};

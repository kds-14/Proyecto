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
        Schema::create('fichas', function (Blueprint $table) {
            
            $table->string("Nro_ficha")->primary();
            $table->string("Jornada",50);
            $table->string("Nro_aprendices",50);
            $table->string("programas_Codigo");
            $table->foreign("programas_Codigo")->references("programas_Codigo")->on("programas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};

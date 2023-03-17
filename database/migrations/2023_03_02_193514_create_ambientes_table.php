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
        Schema::create('ambientes', function (Blueprint $table) {
            $table->string('Nro_ambi')->primary();
            $table->string('Elementos_del_Ambiente');
            $table->string('Especializacion');
            $table->string("Codigo_sede");
            $table->foreign("Codigo_sede")->references("Codigo_sede")->on("sedes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambientes');
    }
};

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
        Schema::create('area_tematicas', function (Blueprint $table) {
            $table->string('Codigo_area')->primary();
            $table->string('Nombre_area');
            $table->string('Codigo_red');
            $table->foreign('Codigo_red')->references('Codigo_red')->on('red_tematicas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_tematicas');
    }
};

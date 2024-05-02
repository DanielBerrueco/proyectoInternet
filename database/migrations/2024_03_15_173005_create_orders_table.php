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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('stats');
            $table->foreignId('jefa_id')->constrained('users');
            $table->foreignId('equipo_id')->constrained('equipment');
            $table->foreignId('ingBiomedico_id')->constrained('users');
            $table->foreignId('area_id')->constrained('areas');
            $table->string('ubicacion');
            $table->text('falla');
            $table->date('fecha_ejecucion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

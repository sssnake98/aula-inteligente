<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('focos', function (Blueprint $table) {
        $table->id();
        $table->string('codigo')->unique();
        $table->string('tipo');
        $table->integer('intensidad'); // en porcentaje o lumens
        $table->string('ubicacion');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('focos');
    }
};

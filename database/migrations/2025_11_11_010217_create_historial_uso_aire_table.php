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
    Schema::create('historial_uso_aire', function (Blueprint $table) {
        $table->id();
        $table->foreignId('aire_acondicionado_id')->constrained()->onDelete('cascade');
        $table->date('fecha');
        $table->time('hora_inicio');
        $table->time('hora_fin');
        $table->decimal('temperatura', 4, 1)->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_uso_aire');
    }
};

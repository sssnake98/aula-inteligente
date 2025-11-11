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
    Schema::create('reservas', function (Blueprint $table) {
        $table->id();
        $table->date('fecha');
        $table->time('hora_inicio');
        $table->time('hora_fin');
        $table->string('tipo_origen'); // 'Docente', 'Estudiante', etc.
        $table->foreignId('materia_id')->nullable()->constrained()->onDelete('set null');
        $table->foreignId('docente_id')->nullable()->constrained()->onDelete('set null');
        $table->foreignId('aula_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};

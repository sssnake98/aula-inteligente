<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::table('materias', function (Blueprint $table) {
        $table->dropColumn(['carrera', 'tipo_cursado']); // elimina los viejos
        $table->string('curso')->after('nombre');   // agrega el nuevo
    });
}

public function down()
{
    Schema::table('materias', function (Blueprint $table) {
        $table->string('carrera');
        $table->string('tipo_cursado');
        $table->dropColumn('curso');
    });
}
    };

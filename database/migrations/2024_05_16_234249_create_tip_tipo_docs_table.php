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
        Schema::create('tip_tipo_docs', function (Blueprint $table) {
            $table->id();
            $table->string('tip_nombre', 60);
            $table->string('tip_prefijo', 20);
            $table->timestamps();
        });

        //default

        DB::table('tip_tipo_docs')->insert([
            ['tip_nombre' => 'Instructivo en desarrollo' ,'tip_prefijo' => 'INS'],
            ['tip_nombre' => 'Manual de usuario' ,'tip_prefijo' => 'MAN'],
            ['tip_nombre' => 'Politica de seguridad' ,'tip_prefijo' => 'POL'],
            ['tip_nombre' => 'Guia de procedimientos' ,'tip_prefijo' => 'GUI'],
            ['tip_nombre' => 'Reporte financiero' ,'tip_prefijo' => 'REP']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tip_tipo_docs');
    }
};

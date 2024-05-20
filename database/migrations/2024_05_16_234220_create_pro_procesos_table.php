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
        Schema::create('pro_procesos', function (Blueprint $table) {
            $table->id();
            $table->string('pro_prefijo', 20);
            $table->string('pro_nombre', 60);
            $table->timestamps();
        });

        //Valores Default
        DB::table('pro_procesos')->insert([
            ['pro_prefijo' => 'ING' ,'pro_nombre' => 'Ingenieria'], 
            ['pro_prefijo' => 'MED' ,'pro_nombre' => 'Medicina'],
            ['pro_prefijo' => 'EDU' ,'pro_nombre' => 'Educacion'],
            ['pro_prefijo' => 'ARQ' ,'pro_nombre' => 'Arquitectura'],
            ['pro_prefijo' => 'DER' ,'pro_nombre' => 'Derecho']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_procesos');
    }
};

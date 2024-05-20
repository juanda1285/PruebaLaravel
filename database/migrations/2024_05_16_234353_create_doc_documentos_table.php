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
        Schema::create('doc_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('doc_nombre', 60);
            $table->integer('doc_codigo');
            $table->string('doc_contenido', 400);
            $table->unsignedBigInteger('prod_id');
            $table->unsignedBigInteger('tip_id');

            //foraneas 
            $table->foreign('prod_id')->references('id')->on('pro_procesos')->onDelete('cascade');
            $table->foreign('tip_id')->references('id')->on('tip_tipo_docs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_documentos');
    }
};

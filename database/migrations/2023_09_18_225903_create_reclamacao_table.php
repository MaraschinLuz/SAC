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
        Schema::create('reclamacao', function (Blueprint $table) {
            $table->id();
            $table->date('dtAbertura');
            $table->date('dtFechamento');
            $table->string('relato');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idFilial');
            $table->unsignedBigInteger('idMotivo');
            $table->unsignedBigInteger('idColab');
            $table->timestamps();

            $table->foreign('idCliente')->references('id')->on('cliente');
            $table->foreign('idFilial')->references('id')->on('filial');
            $table->foreign('idMotivo')->references('id')->on('motivo');
            $table->foreign('idColab')->references('id')->on('colaborador');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamacao');
    }
};

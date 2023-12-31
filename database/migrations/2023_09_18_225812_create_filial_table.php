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
        Schema::create('filial', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFilial');
            $table->unsignedBigInteger('idCidade');
            $table->timestamps();

            $table->foreign('idCidade')->references('id')->on('cidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filial');
    }
};

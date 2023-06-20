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
        Schema::create('informacao_inventos', function (Blueprint $table) {
            $table->id();
            $table->string('detalhe_invencao');
            $table->string('resolucao_vantagem');
            $table->string('comparacao');
            $table->string('desvantagem_limitacao');
            $table->string('uso_presente_futuro');
            $table->string('estagio_comercializacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacao_inventos');
    }
};

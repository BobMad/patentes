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
        Schema::create('anterioridade_referencias', function (Blueprint $table) {
            $table->id();
            $table->string('outro_invento');
            $table->string('patente_similar');
            $table->string('relacao_bibliografica');
            $table->string('protecao_propriedade_intelectual');
            $table->string('descricao_outro_invento');
            $table->string('revelada');
            $table->string('outra_patente');
            $table->string('revelado_industria');
            $table->string('interesse_comercial');
            $table->string('detalhe_revelada');
            $table->string('detalhes_outra_patente');
            $table->string('detalhes_interesse_comercial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anterioridade_referencias');
    }
};

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
        Schema::create('investimento_pesquisas', function (Blueprint $table) {
            $table->id();
            $table->string('orgaos');
            $table->string('contrato_termo');
            $table->string('foi_informado');
            $table->string('suporte_interno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investimento_pesquisas');
    }
};

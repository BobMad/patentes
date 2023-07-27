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
        Schema::create('datas_eventos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('objetoPI_id')->constrained('objeto_p_i_s')->onDelete('cascade');
            $table->string('concepcao');
            $table->string('croquis_desenhos');
            $table->string('primeira_descricao');
            $table->string('modelo_operacao');
            $table->string('primeira_publicacao');
            $table->string('primeira_apresentacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas_eventos');
    }
};

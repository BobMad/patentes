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
        Schema::create('representantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('objetoPI_id')->constrained('objeto_p_i_s')->onDelete('cascade');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->string('campus')->nullable();
            $table->string('produto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representantes');
    }
};

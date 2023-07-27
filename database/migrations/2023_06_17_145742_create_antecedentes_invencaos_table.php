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
        Schema::create('antecedentes_invencaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('objetoPI_id')->constrained('objeto_p_i_s')->onDelete('cascade');
            $table->string('diferencial')->nullable();
            $table->string('diferencial_patentes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes_invencaos');
    }
};

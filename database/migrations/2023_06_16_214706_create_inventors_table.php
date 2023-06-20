<?php
declare(strict_types=1);

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
        Schema::create('inventors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sexo');
            $table->string('data_nascimento');
            $table->string('identidade');
            $table->string('cpf');
            $table->string('qualificacao');
            $table->string('instituicao');
            $table->string('vinculo_ifap')->nullable();
            $table->string('matricula_ifap')->nullable();
            $table->string('curso_ifap')->nullable();
            $table->string('periodo')->nullable();
            $table->string('campus_ifap')->nullable();
            $table->string('centro_ifap')->nullable();
            $table->string('departamento')->nullable();
            $table->string('link_lattes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventors');
    }
};

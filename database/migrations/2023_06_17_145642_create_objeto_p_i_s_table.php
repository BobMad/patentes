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
        Schema::create('objeto_p_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('palavras_chave');
            $table->string('campo_invencao');
            $table->string('detalhe_invento');
            $table->string('diario_laboratorio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objeto_p_i_s');
    }
};

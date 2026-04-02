<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tccs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('aluno');
            $table->string('orientador');
            $table->integer('paginas');
            $table->date('data');
            $table->time('hora');
            $table->text('resumo');
            $table->string('palavras_chave');
            $table->string('arquivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tccs');
    }
};

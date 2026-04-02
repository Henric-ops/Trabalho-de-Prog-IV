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
        Schema::table('bancas', function (Blueprint $table) {
            $table->string('orientador')->nullable()->after('titulacao');
            $table->string('avaliador_1')->nullable()->after('orientador');
            $table->string('avaliador_2')->nullable()->after('avaliador_1');
            $table->string('avaliador_3')->nullable()->after('avaliador_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bancas', function (Blueprint $table) {
            $table->dropColumn(['orientador', 'avaliador_1', 'avaliador_2', 'avaliador_3']);
        });
    }
};

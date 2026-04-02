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
            if (!Schema::hasColumn('bancas', 'avaliador_1')) {
                $table->string('avaliador_1')->nullable()->after('tcc_id');
            }
            if (!Schema::hasColumn('bancas', 'avaliador_2')) {
                $table->string('avaliador_2')->nullable()->after('avaliador_1');
            }
            if (!Schema::hasColumn('bancas', 'avaliador_3')) {
                $table->string('avaliador_3')->nullable()->after('avaliador_2');
            }
            if (Schema::hasColumn('bancas', 'orientador')) {
                $table->dropColumn('orientador');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bancas', function (Blueprint $table) {
            if (!Schema::hasColumn('bancas', 'orientador')) {
                $table->string('orientador')->nullable()->after('titulacao');
            }
            if (Schema::hasColumn('bancas', 'avaliador_3')) {
                $table->dropColumn('avaliador_3');
            }
            if (Schema::hasColumn('bancas', 'avaliador_2')) {
                $table->dropColumn('avaliador_2');
            }
            if (Schema::hasColumn('bancas', 'avaliador_1')) {
                $table->dropColumn('avaliador_1');
            }
        });
    }
};

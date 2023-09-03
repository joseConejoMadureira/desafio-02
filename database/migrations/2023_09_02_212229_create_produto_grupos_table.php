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
        Schema::create('produto_grupos', function (Blueprint $table) {
            $table->id("id_produto_grupo");
            $table->string("nm_produto_grupo",60);
        });
        Schema::table('produtos', function(Blueprint $table) {
            $table->unsignedBigInteger('id_produto_grupo');
            $table->foreign('id_produto_grupo')->references('id_produto_grupo')->on('produto_grupos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_grupos');
    }
};

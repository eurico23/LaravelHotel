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
        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_do_quarto');
            $table->string('tags');
            $table->string('tipo_de_quarto');
            $table->longText('descricao_do_quarto');
            $table->string('preco_por_noite');
            $table->string('numero_quarto_disponiveis');
            $table->string('numero_pessoas_no_quarto');
            $table->string('numero_camas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quartos');
    }
};

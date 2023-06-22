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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_produto');
            $table->string('nome_produto');
            $table->string('descricao_produto');
            $table->decimal('preco_produto', 8, 2);
            $table->integer('quantidade_produto');
            $table->timestamps(); // Adiciona as colunas created_at e updated_at
            $table->softDeletes(); // Adiciona a coluna deleted_at para soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};

<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    // Executado quando rodamos "php artisan migrate"
    public function up(): void
    {
        // Cria a tabela "pessoas" no banco de dados
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id(); // Coluna "id" (chave primária, auto incremento)
            $table->string('nome'); // Coluna "nome", do tipo texto
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }
 
    // Executado quando desfazemos a migration
    // ("php artisan migrate:rollback")
    public function down(): void
    {
        // Apaga a tabela "pessoas" caso a migration seja revertida
        Schema::dropIfExists('pessoas');
    }
};

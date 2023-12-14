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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('data_nasc');
            $table->string('cpf', 11)->unique();
            $table->enum('sexo', ['masculino', 'feminino', 'transgênero', 'gênero neutro', 'não-binário', 'outro']);
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('rua')->nullable();
            $table->string('complemento')->nullable();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa');
    }
};

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
        Schema::create('protocolo', function (Blueprint $table) {
            $table->increments('numero');
            $table->string('descricao');
            $table->date('data');
            $table->integer('prazo');

            //referencia ao contribuinte:
            $table->BigInteger('contribuinte')->unsigned();
            $table->foreign('contribuinte')->references('id')->on('pessoa')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('protocolo');
    }
};

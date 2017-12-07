<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_empresa', 30);
            $table->string('razao_social', 30);
            $table->string('cidade', 30);
            $table->string('estado', 30);
            $table->string('cep', 20);
            $table->string('insc_municipal', 30);
            $table->string('insc_estadual', 30);
            $table->string('cnpj', 30);
            $table->string('nome_responsavel', 30);
            $table->string('telefone', 30);
            $table->string('email_respon', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaChamados extends Migration
{
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('pedido_id');
            $table->string('titulo');
            $table->string('observacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}

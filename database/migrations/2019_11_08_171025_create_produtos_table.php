<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',50);
            $table->integer('qtde');
            $table->float('valor');
            $table->string('foto',30);
            $table->text('descricao',500);
            $table->string('cor',30);
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('produtos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
}

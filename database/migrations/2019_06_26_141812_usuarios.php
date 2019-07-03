<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome');
            // forma de colocar uma foreign key dentro da tabela
                // $table->unsignedBigInteger('id_produto');
                // $table->foreign('id_produto')->references('id')->on('produto');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

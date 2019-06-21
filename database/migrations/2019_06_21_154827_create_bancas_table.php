<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('avaliador1_FK')->unsigned();;
            $table->foreign('avaliador1_FK')->references('id')->on('users');            
            $table->bigInteger('orientador_FK')->unsigned();;
            $table->foreign('orientador_FK')->references('id')->on('users');
            $table->bigInteger('avaliador2_FK')->unsigned();;
            $table->foreign('avaliador2_FK')->references('id')->on('users');            
            $table->string('nota_orientador');
            $table->string('data_defesa');
            $table->string('status');
            $table->string('relatorio_caminho');
            $table->string('nota_avaliador1');
            $table->string('nota_avaliador2');
            $table->bigInteger('company_FK')->unsigned();
            $table->foreign('company_FK')->references('id')->on('companies');            
            $table->bigInteger('user_FK')->unsigned();;
            $table->foreign('user_FK')->references('id')->on('users');            
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
        Schema::dropIfExists('bancas');
    }
}
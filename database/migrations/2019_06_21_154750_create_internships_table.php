<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_FK')->unsigned();;
            $table->foreign('user_FK')->references('id')->on('users');
            $table->string('nome_supervisor');
            $table->bigInteger('company_FK')->unsigned();;
            $table->foreign('company_FK')->references('id')->on('companies');
            $table->string('telefone_supervisor');
            $table->string('email_supervisor');
            $table->string('data_inicio');
            $table->string('data_fim');
            $table->bigInteger('orientador_FK')->unsigned();;
            $table->foreign('orientador_FK')->references('id')->on('users');
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
        Schema::dropIfExists('internships');
    }
}
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
            $table->integer('user_FK');
            $table->string('nome_supervisor');
            $table->integer('empresa_FK');
            $table->string('telefone_supervisor');
            $table->string('email_supervisor');
            $table->string('data_inicio');
            $table->string('data_fim');
            $table->integer('orientador_FK');
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

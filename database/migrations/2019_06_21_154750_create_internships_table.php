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
            $table->string('supervisor_name');
            $table->bigInteger('company_FK')->unsigned();;
            $table->foreign('company_FK')->references('id')->on('companies');
            $table->string('supervisor_phone');
            $table->string('supervisor_email');
            $table->string('start_date');
            $table->string('end_date');
            $table->bigInteger('advisor_FK')->unsigned();;
            $table->foreign('advisor_FK')->references('id')->on('users');
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
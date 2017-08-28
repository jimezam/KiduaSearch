<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseaseTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_treatment', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('disease_id')->unsigned();
            $table->integer('treatment_id')->unsigned();
            // $table->timestamps();

            $table->foreign('disease_id')
              ->references('id')->on('diseases')
              ->onDelete('cascade');

            $table->foreign('treatment_id')
              ->references('id')->on('treatments')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_treatment');
    }
}

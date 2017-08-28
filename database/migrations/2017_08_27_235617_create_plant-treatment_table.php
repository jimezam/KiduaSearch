<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_treatment', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('plant_id')->unsigned();
            $table->integer('treatment_id')->unsigned();
            // $table->timestamps();

            $table->foreign('plant_id')
              ->references('id')->on('plants')
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
        Schema::dropIfExists('plant_treatment');
    }
}

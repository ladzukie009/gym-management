<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_plannings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('meal_1');
            $table->string('meal_2');
            $table->string('meal_3');
            $table->string('meal_4');
            $table->string('meal_5');
            $table->string('meal_6');
            $table->string('meal_7');
            $table->string('meal_8');
            $table->string('meal_9');
            $table->string('meal_10');
            $table->string('meal_11');
            $table->string('meal_12');
            $table->string('meal_13');
            $table->string('meal_14');
            $table->string('meal_15');
            $table->string('meal_16');
            $table->string('meal_17');
            $table->string('meal_18');
            $table->string('meal_19');
            $table->string('meal_20');
            $table->string('meal_21');
            $table->string('meal_22');
            $table->string('meal_23');
            $table->string('meal_24');
            $table->string('meal_25');
            $table->timestamps();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_plannings');
    }
}
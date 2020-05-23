<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrainingAttendees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_attendees', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('training_id')->unsigned()->index();
            $table->foreign('training_id')->references('id')->on('trainings');

            $table->tinyInteger('invitation_status')->comment('0 for invited, 1 for accpeted, 2 for rejected')->default(0);

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
        Schema::dropIfExists('training_attendees');
    }
}

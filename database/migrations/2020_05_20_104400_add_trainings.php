<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrainings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('status')->default('not_started');

            $table->bigInteger('domain_id')->unsigned()->index();
            $table->foreign('domain_id')->references('id')->on('domains');

            $table->text('description');

            $table->softDeletes();

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
        Schema::dropIfExists('trainings');
    }
}

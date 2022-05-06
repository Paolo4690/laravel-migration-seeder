<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 50)->nullable();
            $table->string('departure_station', 100)->nullable();
            $table->string('arrival_station', 100)->nullable();
            $table->dateTime('departure_time')->nullable();
            $table->dateTime('arrival_times')->nullable();
            $table->integer('train_code')->nullable();
            $table->smallInteger('carriages')->nullable();
            $table->smallInteger('in_time')->nullable();
            $table->boolean('deleted')->nullable();
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
        Schema::dropIfExists('trains');
    }
}

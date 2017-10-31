<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial',20);
            $table->string('password',20);
            $table->string('type',10);
            $table->boolean('is_available')->default(false);
            $table->boolean('is_used')->default(false);
            $table->timestamps(); 

        });

        Schema::create('sensor_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sensor_id');
            $table->unsignedInteger('user_id');

            $table->foreign('sensor_id')->references('id')->on('sensors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });



        Schema::create('activeplants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('sensor_id');
            $table->string('name',50);
            $table->integer('tanaman');
            $table->integer('area');
            $table->integer('capground');
            $table->string('city');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sensor_id')->references('id')->on('sensors')->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::create('log_plants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activeplant_id');
            $table->string('temperature',10)->nullable();
            $table->string('humidity',10)->nullable();
            $table->string('itensity',10)->nullable();
            $table->string('ph',10)->nullable();
            $table->string('ec',10)->nullable();
            $table->string('vwind',10)->nullable();
            $table->string('rssi',10)->nullable();
            $table->timestamps();

           $table->foreign('activeplant_id')->references('id')->on('activeplants')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('log_powers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activeplant_id');
            $table->string('water',10);
            $table->timestamps();

           $table->foreign('activeplant_id')->references('id')->on('activeplants')
                ->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_plants');
        Schema::dropIfExists('log_powers');
        Schema::dropIfExists('activeplants');
        Schema::dropIfExists('sensor_user');
        Schema::dropIfExists('sensors');
    }
}

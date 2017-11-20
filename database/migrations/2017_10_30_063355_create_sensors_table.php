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
            $table->unsignedInteger('user_id');
            $table->string('serial',20);
            $table->string('password',20);
            $table->string('type',10);
            $table->timestamps(); 

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->text('schedule');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('plants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->integer('umur1')->nullable();
            $table->integer('umur2')->nullable();
            $table->integer('umur3')->nullable();
            $table->integer('umur4')->nullable();
            $table->float('kc1')->nullable();
            $table->float('kc2')->nullable();
            $table->float('kc3')->nullable();
            $table->float('kc4')->nullable();
            $table->integer('tmin')->nullable();
            $table->integer('tmax')->nullable();
            $table->integer('hmin')->nullable();
            $table->integer('hmax')->nullable();
            $table->integer('imin')->nullable();
            $table->integer('imax')->nullable();
            $table->integer('panenmin')->nullable();
            $table->integer('panenmax')->nullable();
            $table->string('climate',20)->nullable();
            $table->integer('distancemin')->nullable();
            $table->integer('distancemax')->nullable();
            $table->integer('depthmin')->nullable();
            $table->integer('depthmax')->nullable();
            $table->timestamps();
        });

        Schema::create('activeplants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('sensor_id');
            $table->unsignedinteger('plant_id');
            $table->string('name',50);
            $table->integer('area')->nullable();
            $table->integer('capground')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sensor_id')->references('id')->on('sensors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('plant_id')->references('id')->on('plants')->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::create('log_plants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sensor_id');
            $table->float('temperature')->nullable();
            $table->float('humidity')->nullable();
            $table->float('shumidity')->nullable();
            $table->integer('intensity')->nullable();
            $table->float('ph')->nullable();
            $table->float('ec')->nullable();
            $table->float('vwind')->nullable();
            $table->integer('pressure')->nullable();
            $table->integer('rssi')->nullable();
            $table->timestamps();

           $table->foreign('sensor_id')->references('id')->on('sensors')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('log_powers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activeplant_id');
            $table->float('water');
            $table->float('power');
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
        Schema::dropIfExists('pegawai');
        Schema::dropIfExists('log_plants');
        Schema::dropIfExists('log_powers');
        Schema::dropIfExists('activeplants');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('sensors');
        Schema::dropIfExists('plants');
    }
}

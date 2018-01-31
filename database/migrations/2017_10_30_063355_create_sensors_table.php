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

        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('code',20);
            $table->string('code2',20);
            $table->string('name',80);
            $table->text('description')->nullable();
            $table->timestamps(); 

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('type');
            $table->text('spesification')->nullable();
            $table->text('description')->nullable();
            $table->boolean('category')->default(true);
            $table->timestamps();
        });

        Schema::create('asset_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asset_id');
            $table->unsignedInteger('room_id')->nullable(); // alokasi
            $table->unsignedInteger('user_id')->nullable(); // peminjam
            $table->string('year',6);
            $table->string('no_po',20);
            $table->string('no_bst',20);
            $table->string('serial',20);
            $table->string('sourcefund',20);
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('condition');
            $table->timestamps();

            $table->foreign('asset_id')->references('id')->on('assets')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });

        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->json('data');
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
        Schema::dropIfExists('asset_details');
        Schema::dropIfExists('assets');
        Schema::dropIfExists('plans');
        Schema::dropIfExists('rooms');
    }
}

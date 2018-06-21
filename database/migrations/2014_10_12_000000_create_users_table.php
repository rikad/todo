<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20)->unique();
            $table->string('name',60);
            $table->string('email',60)->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->smallInteger('phone')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('desc','200');
            $table->integer('leader_id')->unsigned();
            $table->smallInteger('status')->default('0');
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('users')
                ->onUpdate('restrict')->onDelete('restrict');

        });

       Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('project_id')->references('id')->on('projects')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('restrict')->onDelete('restrict');

        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('desc','200');
            $table->smallInteger('difficulty');
            $table->json('comments')->nullable();
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->smallInteger('status')->default('0');
            $table->date('deadline');
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('restrict')->onDelete('restrict');
        });

        Schema::create('difficulties', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned();
            $table->smallInteger('exp')->unsigned();
        });
	

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('difficulties');
        Schema::dropIfExists('users');
    }
}

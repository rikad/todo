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
            $table->string('noid',30)->nullable()->unique();
            $table->string('username',20)->unique();
            $table->string('name',60);
            $table->string('email',60)->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('phone',20)->nullable();
            $table->text('desc')->nullable(); //will json
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('users');
    }
}

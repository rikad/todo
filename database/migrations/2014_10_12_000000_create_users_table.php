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
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();;
            $table->string('nip',20)->unique();
            $table->string('name',20);
            $table->date('birthdate')->nullable();
            $table->string('gender',1)->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('department')->nullable();
            $table->string('jabatan')->nullable();
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
        Schema::dropIfExists('pegawai');
        Schema::dropIfExists('users');
    }
}

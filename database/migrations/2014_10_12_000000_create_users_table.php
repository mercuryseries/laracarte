<?php

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
            $table->string('password', 60);
            $table->string('website')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('available_for_hire')->default(false);
            $table->tinyInteger('laravel')->default(1);
            $table->tinyInteger('frontend')->default(1);
            $table->tinyInteger('backend')->default(1);
            $table->tinyInteger('mobile')->default(1);
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
        Schema::drop('users');
    }
}

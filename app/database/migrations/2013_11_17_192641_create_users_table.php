<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('users', function(Blueprint $table) {
      $table->increments('id');
      $table->string('username')->unique();
      $table->string('password', 64);
      $table->string('email')->nullable();
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
		Shema::drop('users');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->bigIncrements('id');
			$table->string('email', '50');
			$table->string('username', '20');
			$table->string('password', '60');
			$table->string('password_temp', '60');
			$table->string('code', '60');
			$table->integer('active');
			$table->timestamps();
			$table->unique('email');
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

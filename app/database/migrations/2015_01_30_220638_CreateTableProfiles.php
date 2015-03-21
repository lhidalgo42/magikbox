<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfiles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id')->unique();
			$table->string('rut')->unique();
			$table->string('name');
			$table->string('lastname_1');
			$table->string('lastname_2')->nullable();
			$table->date('born')->nullable();
			$table->string('sex')->nullable();
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
		Schema::drop('profiles');
	}

}

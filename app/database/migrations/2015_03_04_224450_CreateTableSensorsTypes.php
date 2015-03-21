<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSensorsTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sensors_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('uses');
            $table->string('examples');
            $table->string('tag');
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
		Schema::drop('sensors_types');
	}

}

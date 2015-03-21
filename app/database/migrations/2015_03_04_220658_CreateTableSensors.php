<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSensors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sensors', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('products_id');
            $table->integer('sensors_types_id');
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
		Schema::drop('sensors');
	}

}

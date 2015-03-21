<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSells extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sells', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('img_path');
            $table->string('description');
            $table->string('price');
            $table->string('products_types_id');
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
		Schema::drop('sells');
	}

}

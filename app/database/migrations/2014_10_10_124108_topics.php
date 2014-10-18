<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Topics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function($table){
			$table->increments('id');
			$table->string('tName')->unique();
			$table->double('tLat');
			$table->double('tLong');
			$table->integer('tType');
			$table->text('tDescription');
			$table->integer('tVote');
			$table->dateTime('tCreateAt');

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
		Schema::drop('topics');
	}

}

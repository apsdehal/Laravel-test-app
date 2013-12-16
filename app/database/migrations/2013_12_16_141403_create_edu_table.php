<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEduTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu', function(Blueprint $table) {
			$table->integer('user_id');
			$table->increments('edu_id');
			$table->string('course_name')->nullable();
			$table->string('institution')->nullable();
			$table->string('start_date')->nullable();
			$table->string('end_date')->nullable();
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
		Schema::drop('edu');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work', function(Blueprint $table) {
			$table->integer('user_id');
			$table->increments('work_id');
			$table->string('job_title')->nullable();
			$table->string('company')->nullable();
			$table->string('start_date')->nullable();
			$table->string('end_date')->nullable();
			$table->text('other_info')->nullable();
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
		Schema::drop('work');
	}

}

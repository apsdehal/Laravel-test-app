user_<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('infos', function(Blueprint $table) {
			$table->integer('user_id');
			$table->increments('info_id');
			$table->string('full_name');
			$table->string('email')->nullable();
			$table->integer('phone_no')->nullable();
			$table->string('website')->nullable();
			$table->text('address_line1')->nullable();
			$table->text('address_line2')->nullable();
			$table->string('photo',100)->nullable();
			$table->string('youtubelink')->nullable();
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
		Schema::drop('infos');
	}

}

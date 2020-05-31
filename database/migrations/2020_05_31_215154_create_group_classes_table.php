<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_classes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('class_date_time')->nullable();
			$table->integer('room')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 50)->nullable();
			$table->string('description', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_classes');
	}

}

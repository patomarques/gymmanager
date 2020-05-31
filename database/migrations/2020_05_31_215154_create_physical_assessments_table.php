<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhysicalAssessmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('physical_assessments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('anamnese_patient')->nullable();
			$table->string('skinfolds', 200)->nullable();
			$table->integer('exercise_test')->nullable();
			$table->dateTime('evaluation_date')->nullable();
			$table->dateTime('next_evaluation_date')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('physical_assessments');
	}

}

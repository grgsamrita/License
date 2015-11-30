<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('license',function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lic_no');
			$table->date('issue_date');
			$table->date('expiry_date');
			$table->string('type');
			$table->integer('applicant_id');
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
		Schema::drop('license');
	}

}

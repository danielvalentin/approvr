<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('monthly')->default(0); // Monthly subscription price
			$table->integer('projects')->default(1);
			$table->integer('clients')->default(1);
			$table->string('space')->default(10000000); // bytes - 10 mb
			$table->string('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscriptions');
	}

}

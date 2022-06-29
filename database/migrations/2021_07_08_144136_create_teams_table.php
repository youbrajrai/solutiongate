<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('designation');
			$table->string('image');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
			$table->string('linkedin');
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
		Schema::dropIfExists('teams');
	}
}

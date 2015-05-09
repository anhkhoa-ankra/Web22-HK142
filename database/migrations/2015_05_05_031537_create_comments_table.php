<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('parent_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('email');
			$table->string('website');
			$table->string('ip');
			$table->text('content');
			$table->boolean('approved');
			$table->timestamps();
		});

		Schema::table('comments', function(Blueprint $table)
		{
			$table->foreign('post_id')->references('id')->on('posts');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('parent_id')->references('id')->on('comments');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}

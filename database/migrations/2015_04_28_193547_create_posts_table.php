<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('content');
			$table->integer('author')->unsigned();
			$table->integer('category')->unsigned();
			$table->string('slug')->unique();
			$table->timestamp('posted_on');
			$table->timestamps();
		});

		Schema::table('posts', function(Blueprint $table)
		{
			$table->foreign('author')->references('id')->on('users');
			$table->foreign('category')->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}

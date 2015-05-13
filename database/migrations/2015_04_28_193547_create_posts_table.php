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
			$table->string('short_intro');
			$table->longText('content');
			$table->string('featured_img');
			$table->string('slug')->unique();
			$table->integer('user_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->timestamp('posted_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamps();
		});

		Schema::table('posts', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('category_id')->references('id')->on('categories');
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

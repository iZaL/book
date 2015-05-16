<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->text('title_en');
            $table->text('title_ar');
            $table->text('content');
            $table->text('cover_en');
            $table->text('cover_ar');
            $table->text('url');
            $table->boolean('free'); // url or html
            $table->boolean('published'); // url or html
            $table->bigInteger('views'); // url or html
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
		Schema::table('books', function(Blueprint $table)
		{
			//
            $table->drop();
		});
	}

}

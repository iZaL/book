<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_lists', function(Blueprint $table)
		{
			//
            $table->increments('id');
            $table->integer('book_id');
            $table->integer('list_id');
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
		Schema::table('book_lists', function(Blueprint $table)
		{
			//
            $table->drop();
		});
	}

}

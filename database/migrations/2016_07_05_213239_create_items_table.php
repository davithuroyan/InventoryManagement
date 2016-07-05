<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string("item_name");
			$table->integer("vendor_id");
			$table->integer("type_id");
			$table->string("serial_number");
			$table->float("price");
			$table->float("weight");
			$table->string("color");
			$table->dateTime("release_date");
			$table->string("photo");
			$table->string("tags")->default(null);
			$table->timestamp("created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}

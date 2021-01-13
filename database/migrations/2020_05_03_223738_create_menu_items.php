<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->decimal('price', 6, 2);
            $table->string('ingredients')->nullable();
            $table->string('size')->nullable();
            $table->string('image_loc')->nullable();
            $table->string('is_available')->nullable();
            $table->string('type')->nullable();
            $table->string('special_tag')->nullable();
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
        Schema::drop('menu_items');
    }
}

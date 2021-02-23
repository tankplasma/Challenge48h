<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("name");
            $table->text("photo")->default('');
            $table->text("description");
            $table->boolean("a");
            $table->boolean("b");
            $table->boolean("c");
            $table->boolean("d");
            $table->boolean("e");
            $table->boolean("f");
            $table->boolean("g");
            $table->boolean("h");
            $table->boolean("i");
            $table->boolean("j");
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

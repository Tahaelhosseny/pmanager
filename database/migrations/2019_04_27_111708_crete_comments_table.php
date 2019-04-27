<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('comments', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->longText('body');
            $table->bigInteger('user_id')->unsigned();
            $table->string('url',255)->nullable();
            $table->bigInteger('commenttable_Id')->unsigned();
            $table->bigInteger('commenttable_type')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        //
    }
}

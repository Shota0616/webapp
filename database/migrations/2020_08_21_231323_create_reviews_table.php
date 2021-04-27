<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('review_title');
            $table->string('review_comment');
            $table->integer('review_evaluation');
            $table->string('review_user_name')->default('ゲスト');
	    $table->string('review_place_name');
	    $table->string('path');
            $table->integer('places_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('places_id')->references('id')->on('places');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}

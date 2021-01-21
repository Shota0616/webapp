<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('place_furigana')->nullable()->unique();
            $table->string('place_name')->nullable()->unique();
            $table->string('place_tel')->nullable();
            $table->string('place_cat')->nullable();
            $table->integer('place_postcode')->nullable();
            $table->string('place_prefecture')->nullable();
            $table->string('place_city')->nullable();
            $table->string('place_block')->nullable();
            $table->string('place_busihours')->nullable();
            $table->string('place_holiday')->nullable();
            $table->string('place_budget')->nullable();
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
        Schema::dropIfExists('places');
    }
}

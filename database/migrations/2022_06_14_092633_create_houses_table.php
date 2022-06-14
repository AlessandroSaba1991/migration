<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 9,2);
            $table->string('address',100);
            $table->string('post_code',10);
            $table->string('city',50);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->tinyInteger('floors')->unsigned();
            $table->text('description');
            $table->string('type',50);
            $table->string('image',255);
            $table->boolean('is_avaible')->default(false);
            $table->string('contract',50);
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
        Schema::dropIfExists('houses');
    }
}

/*
House
id
price
address
post_code
city
square_meter
rooms
bathrooms
floors
description
note
type
image
is_avaible
contract
timestamp
*/

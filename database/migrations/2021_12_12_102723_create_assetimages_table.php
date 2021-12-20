<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assetimages', function (Blueprint $table) {
            $table->integer('iid')->autoIncrement();
            $table->string('images');
            $table->integer('dataid');
            $table->foreign('dataid')->references('tid')->on('assetdatamodels');
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
        Schema::dropIfExists('assetimages');
    }
}

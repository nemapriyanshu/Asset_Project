<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetdatamodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assetdatamodels', function (Blueprint $table) {
            $table->integer('tid')->autoIncrement();
            $table->string('name');
            $table->string('unicode');
            $table->string('typename');
            $table->string('status');
            $table->integer('typeid');
            $table->foreign('typeid')->references('id')->on('assettypemodels');
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
        Schema::dropIfExists('assetdatamodels');
    }
}

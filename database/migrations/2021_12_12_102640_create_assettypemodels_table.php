<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssettypemodelsTable extends Migration
{
    
    public function up()
    {
        Schema::create('assettypemodels', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('type');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assettypemodels');
    }
}

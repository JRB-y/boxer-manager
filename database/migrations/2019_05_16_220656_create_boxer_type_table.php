<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxerTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxer_type', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('boxer_id');
            $table->unsignedBigInteger('type_id');

            $table->foreign('boxer_id')->references('id')->on('boxers');
            $table->foreign('type_id')->references('id')->on('types');
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
        Schema::dropIfExists('boxer_type');
    }
}

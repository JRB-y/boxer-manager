<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->date('birth_date');
            $table->boolean('sex');
            $table->float('weight', 8, 2);
            $table->text('comment')->nullable();
            $table->text('adress')->nullable();
            $table->string('phone')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_phone')->nullable();
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
        Schema::dropIfExists('boxers');
    }
}

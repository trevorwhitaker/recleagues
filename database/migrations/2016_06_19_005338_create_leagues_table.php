<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('LeagueName', 250);
            $table->string('City', 50);
            $table->string('Province', 50);
            $table->string('Sport', 50);
            $table->string('Type', 10);
            $table->string('Website')->nullable();
            $table->string('Person', 100);
            $table->string('Phone', 20);
            $table->string('Email', 100);
            $table->string('Description', 250)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leagues');
    }
}

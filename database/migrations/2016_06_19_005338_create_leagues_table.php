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
            $table->increments('id');
            $table->string('leaguename', 100);
            $table->string('city', 50);
            $table->string('province', 50);
            $table->string('sport', 50);
            $table->string('type', 10);
            $table->string('website')->nullable();
            $table->string('person', 50);
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->string('description', 250)->default('');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('description');
            $table->string('city');
            $table->string('state');

            $table->boolean('monitores-televisores-lcd');
            $table->boolean('monitores-televisores-crt');
            $table->boolean('lampadas');
            $table->boolean('pilhas-baterias');
            $table->boolean('toners');
            $table->boolean('impressoras');
            $table->boolean('computadores');
            $table->boolean('celulares');
            $table->boolean('cameras-fotograficas');

            $table->integer('user_id')->index()->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

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

        Schema::dropIfExists('locations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubRaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_race', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->unsignedInteger('race_id');

            $table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_race', function (Blueprint $table) {
            $table->dropForeign('race_id');
            $table->dropColumn('race_id');
        });
        Schema::dropIfExists('sub_race');
    }
}

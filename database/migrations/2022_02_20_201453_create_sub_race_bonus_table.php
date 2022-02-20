<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubRaceBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_race_bonus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sub_race_id');
            $table->unsignedInteger('ability_id');
            $table->integer('bonus');

            $table->foreign('sub_race_id')->references('id')->on('sub_races')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('race_bonus', function (Blueprint $table) {
            $table->dropForeign('sub_race_id');
            $table->dropColumn('sub_race_id');
            $table->dropForeign('ability_id');
            $table->dropColumn('ability_id');
        });
        Schema::dropIfExists('sub_race_bonus');
    }
}

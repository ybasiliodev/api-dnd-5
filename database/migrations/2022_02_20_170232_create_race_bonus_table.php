<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_bonus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('race_id');
            $table->unsignedInteger('ability_id');
            $table->integer('bonus');

            $table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('ability')->onDelete('cascade');
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
            $table->dropForeign('race_id');
            $table->dropColumn('race_id');
            $table->dropForeign('ability_id');
            $table->dropColumn('ability_id');
        });
        Schema::dropIfExists('race_bonus');
    }
}

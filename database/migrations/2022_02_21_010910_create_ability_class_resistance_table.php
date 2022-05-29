<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityClassResistanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_class_resistance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('ability_id');

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::table('ability_class_resistance', function (Blueprint $table) {
            $table->dropForeign('ability_id');
            $table->dropColumn('ability_id');
            $table->dropForeign('class_id');
            $table->dropColumn('class_id');
        });

        Schema::dropIfExists('ability_class_resistance');
    }
}

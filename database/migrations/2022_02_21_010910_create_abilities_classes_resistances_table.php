<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilitiesClassesResistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities_classes_resistances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('ability_id');

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::table('abilities_classes_resistances', function (Blueprint $table) {
            $table->dropForeign('ability_id');
            $table->dropColumn('ability_id');
            $table->dropForeign('class_id');
            $table->dropColumn('class_id');
        });

        Schema::dropIfExists('abilities_classes_resistances');
    }
}

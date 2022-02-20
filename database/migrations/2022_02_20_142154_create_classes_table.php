<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->string('life_dice');
            $table->unsignedInteger('abilities_x_classes_id');
            $table->unsignedInteger('abilities_x_classes_resist_id');
            $table->string('image');
        });

        Schema::create('abilities_x_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('ability_id');

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');
        });

        Schema::create('abilities_x_classes_resist', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('ability_id');

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('abilities_x_classes_id')->references('id')->on('abilities_x_classes')->onDelete('cascade');
            $table->foreign('abilities_x_classes_resist_id')->references('id')->on('abilities_x_classes_resist')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abilities_x_classes', function (Blueprint $table) {
            $table->dropForeign('ability_id');
            $table->dropColumn('ability_id');
            $table->dropForeign('class_id');
            $table->dropColumn('class_id');
        });

        Schema::table('abilities_x_classes_resist', function (Blueprint $table) {
            $table->dropForeign('ability_id');
            $table->dropColumn('ability_id');
            $table->dropForeign('class_id');
            $table->dropColumn('class_id');
        });

        Schema::dropIfExists('abilities_x_classes');
        Schema::dropIfExists('abilities_x_classes_resist');
        Schema::dropIfExists('classes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSpellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_spell', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('spell_id');

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('spell_id')->references('id')->on('spell')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_spell', function (Blueprint $table) {
            $table->dropForeign('spell_id');
            $table->dropColumn('spell_id');
            $table->dropForeign('class_id');
            $table->dropColumn('class_id');
        });
        Schema::dropIfExists('class_spell');
    }
}

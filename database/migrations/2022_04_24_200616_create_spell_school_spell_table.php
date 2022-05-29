<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpellSchoolSpellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spell_school_spell', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('school_id');
            $table->unsignedInteger('spell_id');

            $table->foreign('school_id')->references('id')->on('spell_school')->onDelete('cascade');
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
        Schema::table('spell_school_spell', function (Blueprint $table) {
            $table->dropForeign('spell_id');
            $table->dropColumn('spell_id');
            $table->dropForeign('school_id');
            $table->dropColumn('school_id');
        });
        Schema::dropIfExists('spell_school_spell');
    }
}

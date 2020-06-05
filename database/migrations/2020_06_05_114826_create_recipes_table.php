<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('introduction')->nullable();
            $table->text('picture')->nullable();
            $table->text('ingredients');
            $table->text('step1');
            $table->text('step2')->nullable();
            $table->text('step3')->nullable();
            $table->text('step4')->nullable();
            $table->text('step5')->nullable();
            $table->text('step6')->nullable();
            $table->text('step7')->nullable();
            $table->text('step8')->nullable();
            $table->text('step9')->nullable();
            $table->text('step10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}

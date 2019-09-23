<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->integer('templatecat_id')->nullable()->unsigned();
            $table->integer('view_count')->unsigned();
            $table->text('about');
            $table->string('image')->default('default.jpg');
            $table->text('code');
            $table->string('bootstrap');
            $table->string('bulma');
            $table->string('foundation');
            $table->string('materialize');
            $table->string('tailwind');
            $table->string('materialui');
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
        Schema::dropIfExists('templates');
    }
}

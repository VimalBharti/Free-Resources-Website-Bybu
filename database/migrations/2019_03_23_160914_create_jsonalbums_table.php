<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsonalbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jsonalbums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ablumnId')->unsigned();
            $table->string('albumName');
            $table->string('url');
            $table->string('thumbnailUrl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jsonalbums');
    }
}

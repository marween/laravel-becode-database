<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('file');
            $table->string('gender');
            $table->year('year');
            $table->string('label');
            $table->string('note');
            $table->jsonb('artists')->default('{}');
            $table->jsonb('songs')->default('{}');
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
        Schema::dropIfExists('albums');
    }
}

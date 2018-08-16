<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('programs_id')->unsigned();
            $table->foreign('programs_id')->references('id')->on('programs');
            
            $table->integer('modules_id')->unsigned();
            $table->foreign('modules_id')->references('id')->on('modules');
            
            $table->string('title', 150)->unique();
            $table->string('slug', 150);
            $table->string('video', 255);
            $table->text('description');
            $table->enum('active', ['0', '1']);

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
        Schema::dropIfExists('chapters');
    }
}

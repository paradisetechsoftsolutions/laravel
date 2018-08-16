<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters_uploads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('programs_id')->unsigned();
            $table->foreign('programs_id')->references('id')->on('programs');
            
            $table->integer('modules_id')->unsigned();
            $table->foreign('modules_id')->references('id')->on('modules');

            $table->integer('chapters_id')->unsigned();
            $table->foreign('chapters_id')->references('id')->on('chapters');
            
            $table->string('name');
            $table->string('type', 20);
            
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
        Schema::dropIfExists('chapters_uploads');
    }
}

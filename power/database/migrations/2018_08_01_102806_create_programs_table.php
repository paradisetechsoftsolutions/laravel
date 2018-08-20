<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title', 150)->unique();
            $table->string('slug', 150);
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('short_video');
            $table->string('video');
            $table->decimal('price', 8, 2);
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
        Schema::dropIfExists('programs');
    }
}

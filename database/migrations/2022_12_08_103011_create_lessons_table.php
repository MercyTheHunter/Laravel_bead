<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ClassID');
            $table->unsignedBigInteger('SubjectID');
            $table->string('LessonDay');  //Hétfő
            $table->string('LessonTime'); //8:00 - 8:45
            $table->timestamps();

            $table->foreign('ClassID')->references('ID')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('SubjectID')->references('ID')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};

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
        Schema::create('delays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentID');
            $table->unsignedBigInteger('LessonID');
            $table->integer('Mennyiseg');
            $table->datetime('Datum');
            $table->timestamps();

            $table->foreign('StudentID')->references('ID')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('LessonID')->references('ID')->on('lessons')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delays');
    }
};

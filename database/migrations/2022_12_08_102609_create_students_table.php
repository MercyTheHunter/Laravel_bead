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
        Schema::create('students', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Vnev');
            $table->string('Knev');
            $table->string('Szulhely');
            $table->datetime('Szulido');
            $table->string('Lakcim');
            $table->unsignedBigInteger('ClassID');
            $table->unsignedBigInteger('LoginID');
            $table->timestamps();

            $table->foreign('ClassID')->references('ID')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('LoginID')->references('ID')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};

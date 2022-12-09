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
        Schema::create('parentstudents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentID');
            $table->unsignedBigInteger('ParentID');
            $table->timestamps();

            $table->foreign('StudentID')->references('ID')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ParentID')->references('ID')->on('parents')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parentstudents');
    }
};

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
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('class_id');
            $table->integer('telp_no', 20);
            $table->string('address', 255);
            $table->string('nis',10);
            $table->string('nisn',10);
            $table->string('image');
            $table->timestamps();
            $table->foreign('users_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('class_id')->on('class')->references('id')->onDelete('cascade');
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

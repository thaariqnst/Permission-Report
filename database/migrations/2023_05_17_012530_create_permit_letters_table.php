<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permit_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('class_id');
            $table->enum('permission_type', ['health', 'other'])->default('other');
            $table->string('desc',255);
            $table->string('proof');
            $table->date('start_date')->useCurrent();
            $table->date('end_date')->useCurrent();
            $table->string('pic_name',100);
            $table->enum('status', ['submitted', 'accepted', 'rejected'])->default('submitted');
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
        Schema::dropIfExists('permit_letters');
    }
};

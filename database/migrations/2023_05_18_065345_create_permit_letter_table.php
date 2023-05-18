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
        Schema::create('permit_letter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('class_id')->constrained('class')->cascadeOnDelete();
            $table->enum('permission_type', ['health', 'other'])->default('other');
            $table->string('desc',255);
            $table->string('proof');
            $table->date('start_date')->useCurrent();
            $table->date('end_date')->useCurrent();
            $table->string('pic_name',100);
            $table->enum('status', ['submitted', 'accepted', 'rejected'])->default('submitted');
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
        Schema::dropIfExists('permit_letter');
    }
};

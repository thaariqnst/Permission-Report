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
            $table->id();
            $table->string('name',100);
            $table->string('class',20);
            $table->string('reason',255);
            $table->date('start_date')->useCurrent();
            $table->date('end_date')->useCurrent();
            $table->string('pic_name',100);
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
        Schema::dropIfExists('permit_letters');
    }
};

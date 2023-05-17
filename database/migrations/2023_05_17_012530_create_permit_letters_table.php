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
            $table->string('name',100)->required();
            $table->string('class',20)->required();
            $table->string('reason',255)->required();
            $table->date('start_date')->required();
            $table->date('end_date')->required();
            $table->string('pic_name',100)->required();
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

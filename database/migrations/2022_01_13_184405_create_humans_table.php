<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familys_id');
            $table->string('tc_no');
            $table->string('name');
            $table->string('sur_name');
            $table->string('address');
            $table->string('phone_num');
            $table->string('blood_type');
            $table->string('instant_location');

            $table->foreign('familys_id')->references('id')->on('familys')->onDelete('cascade');
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
        Schema::dropIfExists('humans');
    }
}

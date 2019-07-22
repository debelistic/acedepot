<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contractors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('contractor_email');
            $table->string('business_logo');
            $table->string('business_description');
            $table->string('country');
            $table->string('state');
            $table->string('address_1', 500);
            $table->string('address_2', 500);
            $table->string('phone_number');
            $table->string('email');
            $table->string('about');
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
        Schema::dropIfExists('contractors');
    }
}

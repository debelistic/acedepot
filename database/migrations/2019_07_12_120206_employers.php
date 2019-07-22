<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('what_you_do');
            $table->string('employer_email')->unique();
            $table->string('country');
            $table->string('state');
            $table->string('address_1', 500);
            $table->string('address_2', 500);
            $table->string('phone_number');
            $table->string('email');
            $table->string('about');
            $table->string('company_logo_url');
            $table->string('website_url');
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
        Schema::dropIfExists('employers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('middle_name');
            $table->string('what_i_do');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('age');
            $table->enum('gender', ['male', 'female']);
            $table->string('religion');
            $table->string('address_1', 500);
            $table->string('address_2', 500);
            $table->enum('highest_qualification', ['no formal education', 'secondary school', 'technical school', 'nce', 'nd1', 'nd2', 'bsc', 'pg degree']);
            $table->string('lga');
            $table->string('state', 100);
            $table->string('country');
            $table->enum('status', ['hired', 'hunting', 'vacation'])->default('hunting');
            $table->integer('num_of_applications')->default(0);
            $table->integer('num_of_jobs_done')->default(0);
            $table->json('skills');
            $table->longText('about');
            $table->string('img_url');
            $table->string('cv_url');
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
        Schema::dropIfExists('candidates');
    }
}

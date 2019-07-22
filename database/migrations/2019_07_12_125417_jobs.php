<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_subject');
            $table->string('job_description');
            $table->string('added_by_email');
            $table->string('job_category');
            $table->string('job_sector');
            $table->enum('minimum_qualification', ['no formal education','primary school', 'secondary school', 'technical school', 'nce', 'nd1', 'nd2', 'bsc', 'msc', 'phd']);
            $table->string('language');
            $table->enum('experience', ['0-1', '1-3', '3-5', 'above 5 years']);
            $table->enum('age_range', ['18-25', '26-30', 'above 30']);
            $table->enum('language_proficiency', ['fluent', 'native user']);
            $table->enum('require_cv', ['yes', 'no'])->nullable()->default('no');
            $table->enum('require_guarantor', ['yes', 'no'])->nullable()->default('no');
            $table->string('other_prefrences');
            $table->string('salary');
            $table->enum('payment_terms', ['weekly', 'bi-weekly', 'monthly', 'project_based']);
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
        Schema::dropIfExists('jobs');
    }
}

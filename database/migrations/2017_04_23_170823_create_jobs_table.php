<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_id');
            $table->string('job_category_id');
            $table->string('job_post');
            $table->string('job_type');
            $table->string('job_title');
            $table->text('job_description');
            $table->string('job_location');
            $table->string('salary_range_min');
            $table->string('salary_range_max');
            $table->string('salary_type');
            $table->string('job_experience');
            $table->string('job_function');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('jobs');
    }

}

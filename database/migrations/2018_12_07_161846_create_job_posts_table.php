<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('slug');
            $table->longText('job_description');
            $table->integer('budget');
            $table->string('status');
            $table->string('show_location');
            $table->string('location');
            $table->tinyInteger('is_payment');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('job_duration_type_id');

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
        Schema::dropIfExists('job_posts');
    }
}

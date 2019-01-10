<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->text('category_choice')->nullable();
            $table->integer('send_interval_email')->nullable();
            $table->integer('send_interval_push')->nullable();
            $table->double('distance')->nullable();
            $table->boolean('subscribe_email')->nullable();
            $table->boolean('subscribe_push')->nullable();
            $table->dateTime('email_last_send')->nullable();
            $table->integer('user_id');
            $table->boolean('subscribe_message')->nullable();
            $table->boolean('subscribe_job_offer')->nullable();
            $table->boolean('subscriber_job_applicant')->nullable();
            $table->boolean('subscriber_job_offer_accept')->nullable();
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
        Schema::dropIfExists('email_notifications');
    }
}

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogsTable extends Migration
{
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('activity');
            $table->ipAddress('user_ip');
            $table->dateTime('date_time');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_logs');
    }

};

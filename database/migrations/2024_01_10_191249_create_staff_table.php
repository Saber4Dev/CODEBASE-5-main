<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('adresse')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('bg_picture')->nullable()->unique('email_address');
            $table->string('phone_number', 20)->nullable();
            $table->text('bio')->nullable();
            $table->date('birthday')->nullable();
            $table->text('skills')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};

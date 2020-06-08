<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donars', function (Blueprint $table) {
            $table->id();

            $table->string('donar_name');
            $table->string('user_id');
            $table->string('blood_group');
            $table->string('donar_email');
            $table->integer('donar_phone');
            $table->string('donar_center');
            $table->string('donar_date');
            $table->string('donar_time');
            $table->string('donar_message');
            $table->string('donar_status')->define(0);
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
        Schema::dropIfExists('blood_donars');
    }
}

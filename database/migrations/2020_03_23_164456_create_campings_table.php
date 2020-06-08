<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campings', function (Blueprint $table) {
            $table->id();
            $table->string('camping_name');
            $table->string('camping_location');
            $table->string('camping_description');
            $table->string('camping_image');
            $table->string('camping_start_time');
            $table->string('camping_end_time');
            $table->string('camping_date');
            $table->string('camping_status');
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
        Schema::dropIfExists('campings');
    }
}

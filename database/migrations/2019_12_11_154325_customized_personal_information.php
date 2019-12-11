<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CustomizedPersonalInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customized_personal_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('phone');
            $table->string('address_line_1')->nullable();;
            $table->string('address_line_2')->nullable();;
            $table->string('signature')->nullable();;
            $table->string('avatar')->nullable();;
            $table->string('gender')->nullable();;
            $table->string('skills')->nullable();;
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
        Schema::dropIfExists('customized_personal_informations');
    }
}

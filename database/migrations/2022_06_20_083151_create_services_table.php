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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // reference on users table //
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // reference on users table //

            $table->string('ser_data1')->nullable(); ### Service Title ###
            $table->unsignedBigInteger('ser_data2')->nullable(); ### Category ID ###
            $table->string('ser_data3')->nullable(); ### Category Name ###
            $table->tinyText('ser_data4')->nullable(); ### Description ###
            $table->unsignedBigInteger('ser_data5')->nullable(); ### Galery ID ###

            $table->string('ser_data6')->nullable(); ### Requirement: Question ###
            $table->string('ser_data7')->nullable(); ###  ###
            $table->string('ser_data8')->nullable(); ###  ###

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
        Schema::dropIfExists('services');
    }
};

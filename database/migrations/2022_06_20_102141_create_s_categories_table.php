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
        Schema::create('s_categories', function (Blueprint $table) {
            $table->id();
            $table->string('scat_data1')->nullable(); ### Name ###
            // reference on users table -admin- //
            $table->unsignedBigInteger('scat_data2'); ### Created By ###
            $table->foreign('scat_data2')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // reference on users table -admin- //
            $table->string('scat_data3')->nullable(); ### Status ###

            $table->string('scat_data4')->nullable(); ###  ###
            $table->string('scat_data5')->nullable(); ###  ###
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
        Schema::dropIfExists('s_categories');
    }
};

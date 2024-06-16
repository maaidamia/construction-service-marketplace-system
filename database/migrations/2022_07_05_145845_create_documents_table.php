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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            // reference on users table //
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // reference on users table //

            $table->string('bddoc_data1')->nullable(); ### SSM ###
            $table->string('bddoc_data2')->nullable(); ### Certificate ###
            $table->string('bddoc_data3')->nullable(); ###  ###
            $table->string('bddoc_data4')->nullable(); ###  ###
            $table->string('bddoc_data5')->nullable(); ###  ###
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
        Schema::dropIfExists('documents');
    }
};

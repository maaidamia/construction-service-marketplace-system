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
        Schema::create('ticketings', function (Blueprint $table) {
            $table->id();

            $table->string('po_code');  ### Code Number

            $table->string('user_id')->nullable(); ### Client
            $table->string('sp_id')->nullable(); ### SP

            $table->string('tic_data1')->nullable(); ### Message
            $table->boolean('tic_data2')->default(0); ### Read User
            $table->boolean('tic_data3')->nullable(); ### Read SP
            $table->string('tic_data4')->nullable(); ### 
            $table->string('tic_data5')->nullable(); ### 

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
        Schema::dropIfExists('ticketings');
    }
};

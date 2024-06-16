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
        Schema::create('bdcorporate', function (Blueprint $table) {
            $table->id();

            // reference on users table //
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // reference on users table //
            
            $table->string('bdcor_data1')->nullable(); ### registered company name ###
            $table->string('bdcor_data2')->nullable(); ### other name ###
            $table->string('bdcor_data3')->nullable(); ### registration number ###
            $table->string('bdcor_data4')->nullable(); ### tax registration number ###
            $table->string('bdcor_data5')->nullable(); ### country of incorparation ###
            $table->timestamp('bdcor_data6'); ### date of incorparation ###
            $table->string('bdcor_data7')->nullable(); ### corparate status ###
            $table->string('bdcor_data8')->nullable(); ### number of employee ###
            $table->string('bdcor_data9')->nullable(); ### Nature and Line of Business ###
            $table->string('bdcor_data10')->nullable(); ### website ###
            $table->string('bdcor_data11')->nullable(); ### registered addres ###
            $table->string('bdcor_data12')->nullable(); ### business address ###
            $table->string('bdcor_data13')->nullable(); ### telephone number ###
            $table->string('bdcor_data14')->nullable(); ### email address ###
            $table->string('bdcor_data15')->nullable(); ### branch (if any) ###
            $table->string('bdcor_data16')->nullable(); ### branch address ###
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
        Schema::dropIfExists('bdcorporate');
    }
};

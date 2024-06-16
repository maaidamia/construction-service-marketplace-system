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
        Schema::create('bdcontact', function (Blueprint $table) {
            $table->id();

            // reference on users table //
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // reference on users table //

            $table->string('bdcon_data1')->nullable(); ### Primary Contact Person ###
            $table->string('bdcon_data2')->nullable(); ### Department ###
            $table->string('bdcon_data3')->nullable(); ### Telephone Number ###
            $table->string('bdcon_data4')->nullable(); ### Email ###
            $table->string('bdcon_data5')->nullable(); ### Secondary Contact Person ###
            $table->string('bdcon_data6')->nullable(); ### Department ###
            $table->string('bdcon_data7')->nullable(); ### Telephone Number ###
            $table->string('bdcon_data8')->nullable(); ### Email ###
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
        Schema::dropIfExists('bdcontact');
    }
};

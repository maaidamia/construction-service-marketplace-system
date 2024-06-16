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
        Schema::create('p_o_s', function (Blueprint $table) {
            $table->id();

            // reference on user table //
            $table->unsignedBigInteger('user_id'); ### SP By ###
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // reference on user table //

            // reference on services table //
            $table->unsignedBigInteger('service_id'); ### Service By ###
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            // reference on services table //

            // reference on sp table //
            $table->unsignedBigInteger('sp_id')->nullable(); ### SP By ###
            // reference on sp table //
            
            // reference on admin table //
            $table->unsignedBigInteger('admin_id')->nullable(); ### Admin By ###
            // reference on admin table //

            $table->timestamp('po_data1')->nullable(); ### Order Launch Date ###
            $table->string('po_data2')->nullable(); ### Purchase Order Number ###
            $table->string('po_data3')->nullable(); ### Order Name ###
            $table->string('po_data4')->nullable(); ### Order Phone ###
            $table->string('po_data5')->nullable(); ### Order Email ###
            $table->string('po_data6')->nullable(); ### Order Address ###
            $table->double('po_data7', 2)->nullable(); ### Amount 1 ###
            $table->double('po_data8', 2)->nullable(); ### Amount 2 ###
            $table->double('po_data9', 2)->nullable(); ### Amount 3 ###
            $table->double('po_data10', 2)->nullable(); ### Amount 4 ###
            $table->double('po_data11', 2)->nullable(); ### Grand 5 ###
            $table->integer('po_data12')->nullable()->default(0); ### Status ###
            $table->string('po_data13')->nullable(); ### Payment Info ###
            $table->integer('po_data14')->nullable()->default(0); ### Verifier Status ###
            $table->string('po_data15')->nullable(); ### Upload File 1 ###
            $table->string('po_data16')->nullable(); ### Upload File 2 ###
            $table->string('po_data17')->nullable(); ### Upload File 3 ###
            $table->string('po_data18')->nullable(); ### Upload File 4 ###
            $table->string('po_data19')->nullable(); ### Upload File 5 ###
            $table->text('po_data20')->nullable(); ### Description ###
            $table->string('po_data21')->nullable(); ###  ###
            $table->string('po_data22')->nullable(); ###  ###
            $table->string('po_data23')->nullable(); ###  ###
            $table->string('po_data24')->nullable(); ###  ###
            $table->string('po_data25')->nullable(); ###  ###
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
        Schema::dropIfExists('p_o_s');
    }
};

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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->integer('payment_type');
            $table->integer('user_id')->unsigned();  
            $table->foreign('user_id')->references('user_id')->on('user'); 
            $table->integer('order_id')->unsigned();  
            $table->foreign('order_id')->references('order_id')->on('order');
            $table->string('transaction_id');
            $table->string('payment_status'); 
            $table->integer('Profile_subscription_id'); 
            $table->string('subscription_plan_type'); 
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
        //
    }
};

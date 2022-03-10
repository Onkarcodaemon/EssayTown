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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('completion_date');
            $table->string('completion_time');
            $table->integer('user_id')->unsigned();  
            $table->foreign('user_id')->references('user_id')->on('user'); 
            $table->integer('Page_No');
            $table->integer('Page_price');
            $table->integer('sources_no');
            $table->string('citation_type');
            $table->string('document_type');
            $table->string('subject');
            $table->string('specific_title');
            $table->string('academic_level');
            $table->string('language');
            $table->string('description_specification');
            $table->string('statistical_analysis');
            $table->string('order_status');
            $table->string('coupon');
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

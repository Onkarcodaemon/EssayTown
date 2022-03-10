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
        Schema::create('uploaded_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Upload_file');
            $table->integer('user_id')->unsigned();  
            $table->foreign('user_id')->references('user_id')->on('user'); 
            $table->integer('order_id')->unsigned();  
            $table->foreign('order_id')->references('order_id')->on('order'); 
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

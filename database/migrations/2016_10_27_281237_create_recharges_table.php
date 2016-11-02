<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cellphone');
            $table->integer('amount');
            $table->integer('status');
            $table->string('message');
            $table->integer('code_error');
            $table->string('message_error');
            $table->integer('customer_id')->unsigned();
            $table->integer('user_id')->unsigned();
            //Relation
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('recharges');
    }
}

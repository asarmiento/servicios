<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories_balance', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->decimal('amount',20,2);
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
        Schema::drop('histories_balance');
    }
}

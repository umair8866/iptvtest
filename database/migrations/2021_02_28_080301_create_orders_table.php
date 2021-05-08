<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_ammount');
            $table->string('order_date');
            $table->string('order_time');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('order_status');
            $table->timestamps();

            $table->foreign('guest_id')->references('id')->on('guests');
            $table->foreign('order_status')->references('id')->on('order_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

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
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->text('shipping_address');
            $table->text('additional_message')->nullable();
            $table->integer('product_finalprice')->nullable();
            $table->integer('pricewithcoupon')->nullable();
            $table->integer('is_paid')->default(0);
            $table->integer('payment_id')->nullable()->comment('1 for Bkash, 2 for Rocket, 3 for nagad, 4 for COD');
            $table->string('transaction_id')->nullable();

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
        Schema::dropIfExists('orders');
    }
}

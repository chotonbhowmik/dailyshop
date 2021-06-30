<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->longText('short_desc')->nullable();
            $table->longText('desc');

           
            $table->string('sku');
            $table->string('regular_price');
            $table->string('offer_price')->nullable();
            $table->integer('Quantity');
            $table->string('size_one')->nullable();
            $table->string('size_two')->nullable();
            $table->string('color_one')->nullable();
            $table->string('color_two')->nullable();

            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();


            $table->longText('keyword')->nullable();
            $table->longText('technical_specification')->nullable();
            $table->longText('uses')->nullable();
            $table->longText('warranty')->nullable();
            $table->integer('status');

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
        Schema::dropIfExists('products');
    }
}

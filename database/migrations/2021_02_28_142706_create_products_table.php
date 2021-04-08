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
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('price');
            $table->foreignId('product_category_id');
            $table->foreignId('user_id');
            $table->string('link_shopee')->nullable();
            $table->string('link_tokopedia')->nullable();
            $table->string('link_bukalapak')->nullable();
            $table->string('link_lazada')->nullable();
            $table->string('link_instagram')->nullable();
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

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
            $table->string('name', 100)->nullable();
            $table->integer('product_id')->nullable();
            $table->string('code', 100)->nullable();
            $table->string('fax', 100)->nullable();
            $table->double('price')->nullable();
            $table->string('suck', 100)->nullable();
            $table->string('stock', 100)->nullable();
            $table->double('discount_price')->nullable();
            $table->string('expiration _date')->nullable();
            $table->string('minimum_amonut')->nullable();
            $table->string('free _delivery')->nullable();
            $table->string('total _view')->nullable();
            $table->string('description')->nullable();
            $table->string('features')->nullable();
            $table->string('creator', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('status')->default(1);
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

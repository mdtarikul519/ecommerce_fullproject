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
            $table->integer('user_id')->nullable();
            $table->integer('carier_id')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->string('invoice_date', 100)->nullable();
            $table->string('delivery_date', 100)->nullable();
            $table->double('total_discount')->nullable();
            $table->double('tax')->nullable();
            $table->double('shipping')->nullable();
            $table->double('shipping_tax')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

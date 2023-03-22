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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('invoice_number');
            $table->integer('address_id');
            $table->string('coupon_name');
            $table->integer('coupon_discount');
            $table->integer('coupon_discounted_amount');
            $table->integer('delivery_charge');
            $table->string('payment_option');
            $table->string('payment_status')->default('unpaid');
            $table->integer('subtotal');
            $table->integer('total_amount');
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
        Schema::dropIfExists('invoices');
    }
};

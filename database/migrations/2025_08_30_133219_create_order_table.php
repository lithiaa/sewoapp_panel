<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->unsignedInteger('id_customer');
            $table->unsignedBigInteger('id_partner');
            $table->date('start_date');
            $table->date('finish_date');
            $table->enum('status', ['pending', 'paid', 'cancelled', 'completed'])->default('pending');
            $table->decimal('total_price', 15, 2);
            $table->string('payment_method');
            $table->string('payment_gateway_ref')->nullable();
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
            $table->foreign('id_partner')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('orders');
    }
};

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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id_order_detail');
            $table->unsignedInteger('id_order');
            $table->unsignedInteger('id_vehicle');
            $table->decimal('price', 15, 2);
            $table->integer('total_days');
            $table->decimal('total_price', 15, 2)->nullable();
            $table->timestamps();

            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('cascade');
            $table->foreign('id_vehicle')->references('id_vehicle')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('order_details');
    }
};

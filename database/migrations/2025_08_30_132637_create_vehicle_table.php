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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id_vehicle');
            $table->unsignedBigInteger('id_partner');
            $table->unsignedInteger('id_category');
            $table->string('vehicle_name');
            $table->decimal('price', 15, 2);
            $table->integer('vehicle_year');
            $table->string('license_plate');
            $table->text('desc')->nullable();
            $table->enum('status', ['booked', 'available', 'maintenance'])->default('available');
            $table->text('image_url')->nullable();
            $table->timestamps();

            $table->foreign('id_partner')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_category')->references('id_category')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

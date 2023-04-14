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
            $table->id();
            $table->unsignedBigInteger('restaurantId');
            $table->unsignedBigInteger('userId');
            $table->datetime('orderDate')->nullable();
            $table->datetime('deliverDate')->nullable();
            $table->string('address');
            $table->unsignedBigInteger('statusId');
            $table->unsignedBigInteger('paymentId');
            $table->timestamps();

            $table->foreign('restaurantId')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('statusId')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('paymentId')->references('id')->on('payments')->onDelete('cascade');
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

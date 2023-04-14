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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->datetime('startDate');
            $table->unsignedBigInteger('orderId');
            $table->unsignedBigInteger('courierId');
            $table->timestamps();

            $table->foreign('orderId')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('courierId')->references('id')->on('couriers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};

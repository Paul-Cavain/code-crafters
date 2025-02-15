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
        $table->string('order_number')->unique();
        $table->enum('status', ['accepted_order', 'pending_order', 'rejected_order']);
        $table->unsignedBigInteger('customer_id');
        $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        $table->enum('completion_status', ['complete', 'in_progress']);
        $table->timestamps();
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

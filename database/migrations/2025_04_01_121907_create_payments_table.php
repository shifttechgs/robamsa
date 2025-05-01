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
//        Schema::create('payments', function (Blueprint $table) {
//            $table->id();
//            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
//            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
//            $table->string('payment_method');
//            $table->decimal('amount', 10, 2);
//            $table->string('payment_status');
//            $table->string('transaction_id')->unique(); // Ensuring unique transaction IDs
//            $table->timestamps();
//
//        });
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Primary key for the payments table
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Order_id references orders table, with cascading delete
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User_id references users table, with cascading delete
            $table->string('payment_method'); // Payment method (e.g., Credit Card, PayPal)
            $table->decimal('amount', 10, 2); // Payment amount
            $table->string('payment_status'); // Payment status (e.g., Pending, Completed)
            $table->string('transaction_id')->unique(); // Unique transaction ID
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

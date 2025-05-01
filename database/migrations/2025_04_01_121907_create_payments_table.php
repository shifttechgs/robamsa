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
            $table->id();
            $table->string('order_id'); // Must match the type of 'order_number'
            $table->foreign('order_id')->references('order_number')->on('orders')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('payment_method');
            $table->decimal('amount', 10, 2);
            $table->string('payment_status');
            $table->string('transaction_id')->unique();
            $table->timestamps();
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

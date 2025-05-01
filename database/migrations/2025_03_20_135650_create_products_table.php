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
//        Schema::create('products', function (Blueprint $table) {
//            $table->id(); // Primary key (Auto-increment)
//            $table->string('product_id')->unique(); // Unique product identifier
//            $table->string('product_name');
//            $table->text('description')->nullable();
//            $table->decimal('price', 10, 2);
//            $table->enum('stock_status', ['in_stock', 'out_of_stock'])->default('in_stock');
//            $table->enum('product_status', ['active', 'inactive'])->default('active');
//            $table->decimal('discount', 5, 2)->default(0.00);
//            $table->string('promotion_id')->nullable();
//            $table->string('image_code')->nullable();
//
//            // Foreign Key Relationships
//            $table->string('category_id'); // References categories.id
//            $table->string('user_id')->nullable(); // References users.id
//
//            $table->timestamps();
//
//            // Foreign Key Constraints
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
//        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->unique();
            $table->string('product_name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('stock_status', ['in_stock', 'out_of_stock'])->default('in_stock');
            $table->enum('product_status', ['active', 'inactive'])->default('active');
            $table->decimal('discount', 5, 2)->default(0.00);
            $table->string('promotion_id')->nullable();
            $table->string('image_code')->nullable();

            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

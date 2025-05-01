<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrderIdColumnInPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Change order_id column to string in payments table
        Schema::table('payments', function (Blueprint $table) {
            $table->string('order_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If you need to rollback, change the order_id column back to integer
        Schema::table('payments', function (Blueprint $table) {
            $table->integer('order_id')->change();
        });
    }
}

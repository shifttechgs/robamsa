<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPfPaymentIdToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add the 'pf_payment_id' column to the 'payments' table
        Schema::table('payments', function (Blueprint $table) {
            $table->string('pf_payment_id')->nullable()->after('m_payment_id');  // You can adjust the 'after' position if needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the 'pf_payment_id' column if rolling back
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('pf_payment_id');
        });
    }
}

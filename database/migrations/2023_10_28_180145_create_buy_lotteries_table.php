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
        Schema::create('buy_lotteries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('lottery_code')->nullable();
            $table->string('lottery_id')->nullable();
            $table->string('lottery_name')->nullable();
            $table->string('lottery_image')->nullable();
            $table->string('reffral_id')->nullable();
            $table->string('reffral_name')->nullable();
            $table->string('reffral_cnic')->nullable();
            $table->string('dob')->nullable();
            $table->string('transaction_image')->nullable();
            $table->string('transaction_id')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('price')->nullable();
            $table->string('shipping_fee')->nullable();
            $table->date('claim_date_time')->nullable();
            $table->string('partner_commission')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('payment_type')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_lotteries');
    }
};

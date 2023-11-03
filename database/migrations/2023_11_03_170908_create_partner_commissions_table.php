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
        Schema::create('partner_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id')->nullable();
            $table->date('date')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('lottery_code')->nullable();
            $table->string('lottery_name')->nullable();
            $table->string('commission')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_commissions');
    }
};

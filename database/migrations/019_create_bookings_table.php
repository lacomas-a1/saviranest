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
        Schema::create('bookings', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('book_ref')->unique();
            $table->decimal('amount', 10, 2);
            $table->string('room_type')->nullable();
            $table->string('status');
            $table->string('ndays')->nullable();
            $table->date('checkin')->nullable();
            $table->date('checkout')->nullable();
            $table->time('prefered_time')->nullable();
            $table->string('adult_no');
            $table->string('child_no')->default(0);
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_phone');
            $table->text('guest_request');
            $table->string('stay_id')->nullable();
            $table->foreign('stay_id')->references('id')->on('stays')->onDelete('cascade');
            $table->string('exps_id')->nullable();
            $table->foreign('exps_id')->references('id')->on('experiences')->onDelete('cascade');
            $table->string('business_id');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

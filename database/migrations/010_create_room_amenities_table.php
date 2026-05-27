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
        Schema::create('room_amenities', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('title');
            $table->string('icon');
            $table->string('description');
             $table->boolean('is_active')->default(true);
            $table->string('room_id');
            $table->integer('sort_order')->default(0);
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_amenities');
    }
};

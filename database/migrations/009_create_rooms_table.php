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
        Schema::create('rooms', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('room_type')->nullable();
            $table->longText('description');
            $table->decimal('price', 10, 2);
            $table->string('currency')->default('KES');
            $table->string('rate')->default('night');
            $table->boolean('is_available')->default(true);
            $table->string('image_url');
            $table->string('stay_id');
            $table->foreign('stay_id')->references('id')->on('stays')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

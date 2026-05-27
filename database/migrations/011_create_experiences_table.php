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
        Schema::create('experiences', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('title');
            $table->string('location');
            $table->text('meeting_point')->nullable();
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('period')->nullable(); // e.g. 3 Days, Half Day
            $table->string('duration')->nullable(); // e.g. 6 Hours
            $table->integer('max_guests')->default(1);
            $table->string('image_url');
            $table->integer('rating');
            $table->decimal('price', 10, 2);
            $table->string('currency')->default('KES');
            $table->string('rate')->default('person');
            $table->text('excerpt');
            $table->boolean('is_available')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->longText('description');
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('experiences');
    }
};

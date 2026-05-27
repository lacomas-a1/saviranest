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
        Schema::create('reviews', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('rating')->default(5);
            $table->text('review');
            $table->text('reply')->nullable();
            $table->string('admin_name')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->string('reviwer_name');
            $table->string('reviewer_email')->nullable();
            $table->string('stay_id')->nullable();
            $table->foreign('stay_id')->references('id')->on('stays')->onDelete('cascade');
            $table->string('exps_id')->nullable();
            $table->foreign('exps_id')->references('id')->on('experiences')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

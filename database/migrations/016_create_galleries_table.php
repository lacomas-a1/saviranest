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
        Schema::create('galleries', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('image_url');
            $table->integer('sort_order')->default(0);
            $table->string('exps_id')->nullable();
            $table->foreign('exps_id')->references('id')->on('experiences')->onDelete('cascade');
            $table->string('stay_id')->nullable();
            $table->foreign('stay_id')->references('id')->on('stays')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};

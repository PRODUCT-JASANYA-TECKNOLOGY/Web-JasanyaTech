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
        Schema::create('porto_category', function (Blueprint $table) {
            $table->unsignedBigInteger('portofolio_id');
            $table->foreign('portofolio_id')->references('id')->on('portofolio')->onDelete("CASCADE")->onUpdate("CASCADE");
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete("CASCADE")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porto_category');
    }
};

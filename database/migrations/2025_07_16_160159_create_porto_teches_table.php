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
        Schema::create('porto_tech', function (Blueprint $table) {
            $table->unsignedBigInteger('portofolio_id');
            $table->foreign('portofolio_id')->references('id')->on('portofolio')->onDelete("CASCADE")->onUpdate("CASCADE");
            $table->unsignedBigInteger('technology_id');
            $table->foreign('technology_id')->references('id')->on('technology')->onDelete("CASCADE")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porto_tech');
    }
};

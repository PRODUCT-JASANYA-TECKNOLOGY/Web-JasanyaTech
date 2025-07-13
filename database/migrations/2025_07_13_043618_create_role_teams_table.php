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
        Schema::create('role_team', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role')->onDelete("CASCADE")->onUpdate("CASCADE");
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('team')->onDelete("CASCADE")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_team');
    }
};

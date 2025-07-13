<?php

use App\Traits\BaseModelSoftDeleteDefault;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BaseModelSoftDeleteDefault;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portofolio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('client_id')->constrained('client');
            $table->string('thumbnail', 255);
            $table->string('title', 128);
            $table->text('desc');
            $table->json('image');
            $table->date('start_project')->nullable();
            $table->date('end_project')->nullable();
            $table->json('technology');
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio');
    }
};

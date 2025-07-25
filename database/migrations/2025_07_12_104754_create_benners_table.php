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
        Schema::create('benner', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('position', 128);
            $table->string('image', 128);
            $table->string('url', 255)->nullable();
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benner');
    }
};

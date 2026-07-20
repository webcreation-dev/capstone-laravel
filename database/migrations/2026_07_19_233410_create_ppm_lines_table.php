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
        Schema::create('ppm_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppm_id')->constrained('ppms')->cascadeOnDelete();
            $table->string('package_type');
            $table->text('package_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_lines');
    }
};

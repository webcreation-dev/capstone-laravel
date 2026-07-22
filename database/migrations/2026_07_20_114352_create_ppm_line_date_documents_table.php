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
        Schema::create('ppm_line_date_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppm_line_date_id')->constrained('ppm_line_dates')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('name');
            $table->string('path');
            $table->string('type')->nullable(); // extension du fichier
            $table->integer('size')->nullable(); // taille en octets
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_line_date_documents');
    }
};

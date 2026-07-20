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
        Schema::create('ppms', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique(); // Référence du PPM
            $table->string('dossier_name');
            $table->string('loan_grant_number');
            $table->string('country_executing_agency');
            $table->string('currency_unit');
            $table->string('status')->default('En cours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppms');
    }
};

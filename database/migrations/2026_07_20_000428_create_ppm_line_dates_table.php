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
        Schema::create('ppm_line_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppm_line_id')->constrained('ppm_lines')->onDelete('cascade');
            $table->string('milestone_type'); // ex: submission, notice_no, ias, deposit_opening, ...
            $table->string('date_category'); // ex: plan, revised, real
            $table->date('date_value');
            
            // On peut ajouter une contrainte d'unicité pour éviter les doublons accidentels
            // ex: une ligne ne peut avoir qu'un seul "plan" pour "submission"
            $table->unique(['ppm_line_id', 'milestone_type', 'date_category'], 'unique_line_milestone_category');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_line_dates');
    }
};

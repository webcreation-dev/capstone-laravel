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
        Schema::create('ppm_lot_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppm_lot_id')->constrained('ppm_lots')->cascadeOnDelete();
            
            // L'énumération des 10 étapes fixes
            $table->enum('milestone_type', [
                'submission', 
                'notice_no', 
                'ias', 
                'deposit_opening', 
                'report_submission', 
                'no_objection', 
                'attribution', 
                'signature', 
                'completion'
            ]);
            
            // Le type de date
            $table->enum('date_category', ['plan', 'revised', 'real']);
            
            // La date saisie
            $table->date('date_value');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_lot_dates');
    }
};

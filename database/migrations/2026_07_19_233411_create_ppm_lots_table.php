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
        Schema::create('ppm_lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppm_line_id')->constrained('ppm_lines')->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            
            // Nouveaux champs demandés pour chaque Lot
            $table->string('tender_number')->nullable(); // N° Appel d'Offres émis
            $table->enum('amount_type', ['MF', 'DQE'])->nullable(); // Montant forfaitaire ou DQE
            $table->decimal('estimated_cost', 15, 2)->nullable(); // Coût estimatif
            $table->enum('procurement_method', ['AOO', 'DRP', 'DC', 'ED'])->nullable(); // Mode de passation
            $table->enum('qualification_type', ['Pré-Qualification', 'Post-Qualification'])->nullable(); // Type de Qualification
            $table->enum('control_audit', ['Préalable', 'à Postériori'])->nullable(); // Contrôle et Audit
            $table->decimal('contract_amount', 15, 2)->nullable(); // Montant du Contrat (en FCFA)
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_lots');
    }
};

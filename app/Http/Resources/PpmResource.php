<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PpmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'reference' => $this->reference,
            'dossier_name' => $this->dossier_name,
            'loan_grant_number' => $this->loan_grant_number,
            'country_executing_agency' => $this->country_executing_agency,
            'currency_unit' => $this->currency_unit,
            'status' => $this->status,
            'lines' => $this->lines->map(function($line) {
                return [
                    'id' => $line->id,
                    'package_type' => $line->package_type,
                    'package_description' => $line->package_description,
                    'lots' => $line->lots->map(function($lot) {
                        return [
                            'id' => $lot->id,
                            'name' => $lot->name,
                            'description' => $lot->description,
                            'tender_number' => $lot->tender_number,
                            'amount_type' => $lot->amount_type,
                            'estimated_cost' => $lot->estimated_cost,
                            'procurement_method' => $lot->procurement_method,
                            'qualification_type' => $lot->qualification_type,
                            'control_audit' => $lot->control_audit,
                            'contract_amount' => $lot->contract_amount,
                            'dates' => $lot->dates->groupBy('milestone_type')->map(function($dates) {
                                return $dates->keyBy('date_category');
                            })->toArray(),
                        ];
                    })->toArray(),
                ];
            })->toArray(),
        ];
    }
}

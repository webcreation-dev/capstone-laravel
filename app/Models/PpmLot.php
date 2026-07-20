<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpmLot extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'ppm_line_id',
        'name',
        'description',
        'tender_number',
        'amount_type',
        'estimated_cost',
        'procurement_method',
        'qualification_type',
        'control_audit',
        'contract_amount',
    ];

    public function line()
    {
        return $this->belongsTo(PpmLine::class, 'ppm_line_id');
    }

    public function dates()
    {
        return $this->hasMany(PpmLotDate::class, 'ppm_lot_id');
    }
}

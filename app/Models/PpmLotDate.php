<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpmLotDate extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'ppm_lot_id',
        'milestone_type',
        'date_category',
        'date_value',
    ];

    public function lot()
    {
        return $this->belongsTo(PpmLot::class, 'ppm_lot_id');
    }
}

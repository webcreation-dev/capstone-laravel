<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmLotDateDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppm_lot_date_id',
        'user_id',
        'name',
        'path',
        'type',
        'size'
    ];

    public function date()
    {
        return $this->belongsTo(PpmLotDate::class, 'ppm_lot_date_id');
    }
}

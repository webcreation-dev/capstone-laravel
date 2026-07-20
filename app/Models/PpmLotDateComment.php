<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmLotDateComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppm_lot_date_id',
        'user_id',
        'content'
    ];

    public function date()
    {
        return $this->belongsTo(PpmLotDate::class, 'ppm_lot_date_id');
    }
}

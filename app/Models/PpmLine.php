<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpmLine extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'ppm_id',
        'package_type',
        'package_description',
    ];

    public function ppm()
    {
        return $this->belongsTo(Ppm::class);
    }

    public function lots()
    {
        return $this->hasMany(PpmLot::class);
    }
}

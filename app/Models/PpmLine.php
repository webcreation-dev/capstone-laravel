<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpmLine extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'ppm_id',
        'system_type',
        'package_type',
        'package_description',
    ];

    protected $appends = ['package_number'];

    public function getPackageNumberAttribute()
    {
        $prefix = 'X';
        if ($this->package_type === 'Travaux') $prefix = 'T';
        elseif ($this->package_type === 'Biens') $prefix = 'B';
        elseif ($this->package_type === 'Consultant') $prefix = 'CF';

        // Format as T-01, B-01, CF-01 using str_pad
        return $prefix . '-' . str_pad($this->id, 2, '0', STR_PAD_LEFT);
    }

    public function ppm()
    {
        return $this->belongsTo(Ppm::class);
    }

    public function lots()
    {
        return $this->hasMany(PpmLot::class);
    }
}

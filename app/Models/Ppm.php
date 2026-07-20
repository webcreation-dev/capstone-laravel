<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ppm extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'dossier_name',
        'loan_grant_number',
        'country_executing_agency',
        'currency_unit',
        'status',
    ];

    public function lines()
    {
        return $this->hasMany(PpmLine::class);
    }
}

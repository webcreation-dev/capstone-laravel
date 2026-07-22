<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmLineDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppm_line_id',
        'milestone_type',
        'date_category',
        'date_value',
    ];

    public function line()
    {
        return $this->belongsTo(PpmLine::class, 'ppm_line_id');
    }

    public function comments()
    {
        return $this->hasMany(PpmLineDateComment::class, 'ppm_line_date_id')->orderBy('created_at', 'desc');
    }

    public function documents()
    {
        return $this->hasMany(PpmLineDateDocument::class, 'ppm_line_date_id')->orderBy('created_at', 'desc');
    }
}

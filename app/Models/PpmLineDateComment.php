<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmLineDateComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppm_line_date_id',
        'user_id',
        'content'
    ];

    public function date()
    {
        return $this->belongsTo(PpmLineDate::class, 'ppm_line_date_id');
    }
}

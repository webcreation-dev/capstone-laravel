<?php

namespace App\Repositories;

use App\Models\Ppm;

class PpmRepository
{
    /**
     * Retrieve all PPMs with their related lines, lots, and dates.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllWithRelations()
    {
        return Ppm::with(['lines.lots.dates'])->latest()->get();
    }
}

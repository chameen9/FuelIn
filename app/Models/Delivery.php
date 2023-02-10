<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public $timestamps = FALSE;
    protected $table = 'deliveries';

    protected $fillable = [
        'id',
        'driver_id',
        'fuel_station_id',
        'fuel_type',
        'liters_requested',
        'delivery_date',
        'status'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function fuelStation()
    {
        return $this->belongsTo(FuelStation::class);
    }
}

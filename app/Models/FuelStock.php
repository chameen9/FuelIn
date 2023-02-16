<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelStock extends Model
{
    use HasFactory;

    protected $table = 'fuel_stocks';

    protected $fillable = ['fuel_type_id', 'station_id', 'liters'];

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id');
    }
    public function fuelStation()
    {
        return $this->belongsTo(FuelStation::class, 'station_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelPrice extends Model
{
    use HasFactory;

    protected $table = 'FuelPrice';
    protected $primaryKey = 'Fuel_Type_ID';
    public $incrementing = false;

    protected $fillable = [
        'Fuel_Type_ID',
        'Price'
    ];

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class, 'Fuel_Type_ID');
    }
}

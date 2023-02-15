<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelQuota extends Model
{
    protected $table = 'Fuel_Quota';

    protected $primaryKey = 'Fuel_Quota_ID';

    protected $fillable = [
        'Vehicle_Type_ID',
        'liters_amount',
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'Vehicle_Type_ID');
    }
}

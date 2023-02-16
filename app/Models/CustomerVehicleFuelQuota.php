<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerVehicleFuelQuota extends Model
{
    use HasFactory;

    protected $table = 'customer_vehicle_fuel_quota';
    protected $fillable = [
        'customer_id',
        'vehicle_id',
        'fuel_quota_id',
        'remaining_liters',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function fuelQuota()
    {
        return $this->belongsTo(FuelQuota::class);
    }
}

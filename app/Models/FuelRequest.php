<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelRequest extends Model
{
    protected $table = 'Fuel_Request';

    protected $fillable = [
        'request_id', 'vehicle_registration_number', 'requested_fuel_amount', 'scheduled_delivery_time', 'delivery_status',
    ];
}

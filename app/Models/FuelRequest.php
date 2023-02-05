<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelRequest extends Model
{
    protected $table = 'fuel_requests';

    protected $fillable = [
        'request_id', 'vehicle_registration_number', 'requested_fuel_amount', 'scheduled_delivery_time', 'delivery_status',
    ];
}

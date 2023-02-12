<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelStation extends Model
{
    protected $table = 'fuel_stations';
    public $timestamps = FALSE;
    protected $primaryKey = 'Fuel_Station_ID';
    protected $fillable = [
        'Fuel_Station_Name', 'Fuel_Station_Location', 'Scheduled_Delivery_Date', 'Scheduled_Delivery_Time', 'Population_density'
    ];
}

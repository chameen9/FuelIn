<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelRequest extends Model
{
    public $timestamps = FALSE;
    protected $table = 'Fuel_Request';
    protected $primaryKey = 'Fuel_Request_ID';
    protected $fillable = [
        'Customer_ID', 'Vehicle_Registration_Number','Fuel_Type_ID','Requested_Liters', 'Scheduled_Filling_Date','Scheduled_Filling_Time', 'Tolerance_Hours','Fuel_Station_ID','status'
    ];
}

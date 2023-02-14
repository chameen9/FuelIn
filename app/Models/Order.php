<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'Fuel_Station_ID', 'Fuel_Type_ID', 'liters_quantity', 'Request_Date', 'Approval_Status', 'Approval_Date', 'Approval_By'
    ];
}

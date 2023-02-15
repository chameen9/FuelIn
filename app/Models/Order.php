<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'Fuel_Station_ID', 'Fuel_Type_ID', 'liters_quantity', 'created_at', 'Approval_Status', 'Approval_Date', 'Approval_By'
    ];
    public function fuelType()
    {
        return $this->belongsTo(FuelType::class, 'Fuel_Type_ID', 'Fuel_Type_ID');
    }
}

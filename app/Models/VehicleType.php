<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $table = 'Vehicle_Type';
    protected $primaryKey = 'Vehicle_Type_ID';

    protected $fillable = [
        'Vehicle_Type_ID', 'Type_Name', 'Description'
    ];
    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'Vehicle_Type_ID', 'Type_Name');
    }
    
}

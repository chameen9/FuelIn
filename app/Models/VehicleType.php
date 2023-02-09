<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $table = 'Vehicle_Type';
    protected $fillable = [
        'Vehicle_Type_ID', 'Type_Name', 'Description'
    ];
}

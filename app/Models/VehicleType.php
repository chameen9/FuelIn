<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    public $timestamps = FALSE;
    protected $table = 'Vehicle_Type';
    protected $primaryKey = 'Vehicle_Type_ID';

    protected $fillable = [
        'Vehicle_Type_ID', 'Type_Name', 'Description'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Driver extends Model
{
    protected $table = 'Driver';
    protected $primaryKey = 'driver_id';
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'driver_license_number',
        'phone_number',
        'address',
        'date_of_birth'
    ];
}
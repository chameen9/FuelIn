<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fuel_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Fuel_Type_Name',
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'Fuel_Type_ID';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The order that belong to the fuel type.
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'Fuel_Type_ID', 'Fuel_Type_ID');
    }
}
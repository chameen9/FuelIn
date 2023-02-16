<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'Customer_ID';
    protected $fillable = [
         'contact_number', 'national_identity_number', 'address'
    ];
    public function vehicles()
{
    return $this->hasMany(Vehicle::class, 'Customer_ID');
}

}

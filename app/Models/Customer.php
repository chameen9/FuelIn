<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'Customer_ID', 'contact_number', 'national_identity_number', 'address'
    ];
}

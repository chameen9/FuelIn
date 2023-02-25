<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $primaryKey = 'Payment_ID';

    protected $fillable = [
        'Fuel_Request_ID',
        'Payment_Date',
        'Payment_Time',
        'Payment_Status_ID',
        'Amount',
    ];
}
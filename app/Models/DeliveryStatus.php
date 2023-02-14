<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryStatus extends Model
{
    public $timestamps = FALSE;
    protected $table = 'delivery_status';

    protected $fillable = [
        'delivery_id',
        'current_location',
        'progress_value',
        'status'
    ];
}

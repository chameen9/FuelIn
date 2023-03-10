<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokens extends Model
{
    use HasFactory;
    
    protected $table = 'tokens';
    protected $primaryKey = 'Token_ID';
    public $timestamps = false;
    protected $fillable = [
        'Fuel_Request_ID',
        'Token',
        'Expiry_Date',
        'Payment_Status_ID'
    ];
}

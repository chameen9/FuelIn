<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeadOfficeLogin extends Model
{
    protected $table = 'Head_Office_Login';
    protected $fillable = ['Username', 'Password'];
}

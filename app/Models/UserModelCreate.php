<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModelCreate extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'user_type_id'
    ];
}

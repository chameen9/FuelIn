<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    public $timestamps = FALSE;
    protected $table = 'user_types';
    protected $fillable = ['type'];
}

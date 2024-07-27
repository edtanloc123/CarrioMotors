<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $primarykey = 'id';
    protected $table = 'account';
    public $timestamps = false;
    protected $fillable = [
        'username', 'email', 'password', 'role'
    ];
}
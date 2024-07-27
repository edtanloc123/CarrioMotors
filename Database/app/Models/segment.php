<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class segment extends Model
{
    protected $primarykey = 'id';
    protected $table = 'segment';
    public $timestamps = false;
    // protected $fillable = [
    //     'username', 'email', 'password', 'role'
    // ];
}
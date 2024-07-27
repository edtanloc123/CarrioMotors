<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $primarykey = 'id';
    protected $table = 'brand';
    public $timestamps = false;
    // protected $fillable = [
    //     'username', 'email', 'password', 'role'
    // ];
}       
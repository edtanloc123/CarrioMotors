<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role_account extends Model
{
    protected $primarykey = 'id';
    protected $table = 'role_account';
    public $timestamps = false;
    // protected $fillable = [
    //     'hotenhanhkhach', 'cmnd', 'loaighe', 'giaghe', 'macb'
    // ];
}
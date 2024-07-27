<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $primarykey = 'id';
    protected $table = 'comment';
    public $timestamps = true;
    protected $fillable = [
        'content', 'accountid','otoid'
     ];
}
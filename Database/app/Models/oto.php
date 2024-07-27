<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class oto extends Model
{
    protected $primarykey = 'id';
    protected $table = 'oto';
    public $timestamps = false;
    protected $fillable = [
        'name','quantity','price', 'color' ,'yearofmanufacture','origin','engine','wattage','fuelcapacity','segmentid',
        'carlineid','showroomid','brandid','photo'
    ];
}
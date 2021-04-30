<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $fillable = [
        'from', 'to', 'date','break','arrival_time','driver_name','price','check_id'
    ];
}

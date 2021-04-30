<?php

namespace App;
use App\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurny extends Model
{
    protected $table = "Jurnys";
    use SoftDeletes;
    protected $fillable = [

        'from', 'to', 'date', 'break', 'arrival_time', 'driver_name', 'price','user_id'

    ];

    public $timestamps = false;

    public function Booking(){
        return $this->hasMany('App\Booking');
    }
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
    public function user()
    {
        return $this->hasMany(User::class,'user_id');
    }

    public function jurnies()
    {
        return $this->hasMany(Booking::class);
    }


    
}

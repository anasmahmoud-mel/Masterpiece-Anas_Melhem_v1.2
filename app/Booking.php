<?php

namespace App;

use App\Http\Controllers\JurnyController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Booking extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'booking_name', 'booking_email','booking_mobile','booking_passenger','jurny_id','user_id',

    ]; 


    // Begin Relation One to One with jurny table .......

  

    public function user(){
        return $this->hasMany('App\User');
    }
  
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function jurny()
    {
        return $this->belongsTo(Jurny::class);
    }

    public function book()
    {
        return $this->belongsTo(Jurny::class,'jurny_id');
    }
 
}

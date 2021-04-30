<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Partner extends Model
{
    use SoftDeletes;
    protected $fillable = [

         'partner_email','partner_password'

    ];

    public function jurny(){
        return $this->hasMany('App\Jurny');
    }
    
 
    
}  


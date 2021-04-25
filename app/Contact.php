<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Contact extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'contact_fname', 'contact_lname','contact_email','contact_subject','contact_message'

    ];  
}

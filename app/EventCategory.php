<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $fillable=['name','img'];

    public function events(){
        return $this->hasMany('App\Event');
    }  
}

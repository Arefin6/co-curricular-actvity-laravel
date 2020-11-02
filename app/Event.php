<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
	protected $fillable = [
		
        'event_img','event_title','event_content','event_category_id'
    ];

    public function eventCategory(){
        return $this->belongsTo('App\EventCategory');
    }
}

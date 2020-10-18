<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  
	      
    protected $fillable = [
        'name','email','stu_id','img','category_id','dept'
    ];
	
	   
	   public function category(){
    
		return $this->belongsTo('App\Category');
    }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

use App\EventCategory;

use App\Student;

use App\Category;

use DB;

class FroentendController extends Controller
{
    
	public function index(){
		
		$eventCategory = EventCategory::all();

		return view('event')->with('eventsCategory',$eventCategory);
			
		 
	}
	
	public function eventCategory($id){

	  $events = EventCategory::find($id);	
	   
	  return view('eventSingle')->with('events',$events);	
	}
	
	public function read(){
	  
	  
	   $result = Student::where('approved',1)->get();
	  
	  if(count($result)>0){
	  
	  return view('alllist')->with(['students' => $result])
		  ->with('category',Category::all());
		  
	  }
  }	
	
 public function approve($id){
		
		$user = Student::find($id);
		
		$user->approved = 1;
		
		$user->save();
		
	   Session::flash('success','Successfully Changed User Permissions' );
		
	  return redirect()->back();
		
	}
	public function notapprove($id){
		
		$user = Student::find($id);
		
		$user->approved = 0;
		
		$user->save();
		
	   Session::flash('success','Successfully Changed User Permissions' );
		
	  return redirect()->back();
		
	}	
}

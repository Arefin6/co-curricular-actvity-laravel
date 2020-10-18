<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

use App\Student;

use App\Category;

use DB;

class FroentendController extends Controller
{
    
	public function index(){
		
		return view('event')
			
 ->with('firest_event',Event::orderBy('created_at','desc')->first())
		
 ->with('secend_event',Event::orderBy('created_at','desc')->skip(1)->take(1)->first())
 
 ->with('thired_event',Event::orderBy('created_at','desc')->skip(2)->take(1)->first())

  ->with('fourth_event',Event::orderBy('created_at','desc')->skip(3)->take(1)->first())
			
  ->with('fifth_event',Event::orderBy('created_at','desc')->skip(4)->take(1)->first())
			
  ->with('sixth_event',Event::orderBy('created_at','desc')->skip(5)->take(1)->first());			
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

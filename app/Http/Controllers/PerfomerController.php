<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perfrom;

use App\Event;

use App\Category;

use App\Student;

use Session;

use DB;

class PerfomerController extends Controller
{
    
	/*public function __construct(){
		
		$this->middleware('approve');
		
		
	}
	
	
*/	
	
	public function show(){
		
		return view('login');
	}
	
	
	public function login(Request $request){
		
		$this->validate($request, [
            'email' => 'required',
			
            'password' => 'required'
        ]);
		 $email = $request->input('email');
		
		 $password = $request->input('password');
		
		  
		
		 $result = DB::table('perfroms')->where('email',$email)
			 ->where('password',$password)
			 ->where('approved',1)->get();
			 
	
			 
		//->where('approved',1)->first();
		 
        
		
		if(count($result)>0){
			
			
		
			
			return view('event') ->with('firest_event',Event::orderBy('created_at','desc')->first())
		
 ->with('secend_event',Event::orderBy('created_at','desc')->skip(1)->take(1)->first())
 
 ->with('thired_event',Event::orderBy('created_at','desc')->skip(2)->take(1)->first())

  ->with('fourth_event',Event::orderBy('created_at','desc')->skip(3)->take(1)->first())
			
  ->with('fifth_event',Event::orderBy('created_at','desc')->skip(4)->take(1)->first())
			
  ->with('sixth_event',Event::orderBy('created_at','desc')->skip(5)->take(1)->first());			
			
			
		}
		
		else {
			
			
		
			
			return redirect()->back()->withmessage('login Information wrog or account not approved');;
		}
		
	}
	
	 public function register(){
		
		$categories = Category::all();

       
		
        return view('register')->with('categories', $categories);
	}
	
	public function store(Request $request)
    
	{
         $this->validate($request, [
			 
            'name' => 'required',
			 
            'email' => 'required|email',
			 
            'password' => 'required',
            
			
        ]);
		
		$performer = perfrom::create([
		
            'name' => $request->name,
			
            'email' => $request->email,
			
            'password'=>$request->password

        ]);
		
		 Session::flash('success','You regited Successfully');
		
		 return redirect()->route('perfrom.login');
		
	}
	
	public function index(){
		
		$users = perfrom::all();
		
		return view('user.index')->with('users',$users);
		
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
	
	public function edit($id){
		
		$users= perfrom::find($id);
		
		return view('user.edit')->with('users',$users);
		
	}
	public function update(Request $request,$id){
		
		
            $this->validate($request,[
			
			'name'=>'required',
				
			'email'=>'required|email'
			
			
		]);
		
	    $users = perfrom::find($id); 
		
		$users->name = $request->name;
		
		$users->email = $request->email;
		
		if($request->has('password')){
			
			$users->password=$request->password;
			
		}
		
		$users->save();
		
		Session::flash('success','user Profile Updated');
		
		return redirect()->back();
		
	}
	public function delete($id){
		
		$users = perfrom::find($id); 
		
		$users->delete();
		
		Session::flash('success','user Profile deleted');
		
		return redirect()->back();
		
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\perfrom;
use App\Category;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
			
		     ->with('events_count',Event::all()->count())
			
			  ->with('students_count',Student::all()->count())
			
			  ->with('users_count',perfrom::all()->count())
			
			  ->with('categories_count',category::all()->count());;
    }
}

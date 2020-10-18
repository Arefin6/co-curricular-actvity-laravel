<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Student;
use App\Category;

class StudentControlleer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.students.index')->with('students',Student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
		$categories = Category::all();

        if($categories->count() == 0)
        {
            Session::flash('info', 'You must have some categories before attempting to add a student');

            return redirect()->back();
        }
		
        return view('admin.students.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'stu_id' => 'required',
            'img'   => 'required|image',
            'category_id'   => 'required',
			'dept' => 'required'
			
        ]);

        $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/students', $img_new_name);

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
			'stu_id' => $request->stu_id,
			'img' => 'uploads/students/'.$img_new_name,
			'category_id' => $request->category_id,
            'dept' => $request->dept
            
            
        ]);

        Session::flash('success','student added successfully');

        return redirect()->route('home.front');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$student=Student::find($id);
		
        return view('admin.students.edit')->with('student',$student)->with('categories',Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
		$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'stu_id' => 'required',
            'category_id'   => 'required',
			'dept' => 'required'
			
        ]);
		
		$student = Student::find($id); 
		
		if($request->hasfile('img')){
			
		 $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/students', $img_new_name);
         
		$student->img = 'uploads/students/'.$img_new_name;		
			
		}
		
		
		 $student->name = $request->name;
		
         $student->email = $request->email;
		
		 $student->stu_id = $request->stu_id;
	
		 $student->category_id = $request->category_id;
		
         $student->dept = $request->dept;
		
		
		$student->save();
		
		
		 Session::flash('success','student Profile Updated successfully');

        return redirect()->back();
		
		

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
		
		$student->delete();
		
		 Session::flash('success','student Profile Deleted successfully');

        return redirect()->back();
		
    }
	
	public function home(){
		
		return view('welcome');
	}
}

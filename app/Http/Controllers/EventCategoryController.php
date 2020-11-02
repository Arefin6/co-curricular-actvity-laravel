<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventCategory;
use Session;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eventcategory.index')->with('eventCategory',EventCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.eventcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			
            'name'=>'required',
            'img' => 'required|image',
        ]);

        $image = $request->img;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/eventCategory', $image_new_name);
        
        EventCategory::create([
			
            'name'=>$request->name,
            'img' => 'uploads/eventCategory/'.$image_new_name,
		]);
		
		Session::flash('success','Event Category created successfully.');
		
		return redirect()->route('EventCategory.index');
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
        $event = EventCategory::find($id);

        return view('admin.eventcategory.edit')->with('event',$event);
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
        $this->validate($request,[
			
			'name'=>'required'
        ]);
        
        $event = EventCategory::find($id);

        if($request->hasFile('img')){
			
        $img = $request->img;

       $img_new_name = time().$img->getClientOriginalName();

       $img->move('uploads/eventCategory', $img_new_name);
       
       $event->img = 'uploads/eventCategory/'.$img_new_name;	
               
           
       }

        $event->name =$request->name;
		
		$event->save();
		
		Session::flash('success','Event Category updated successfully.');
		
		return redirect()->route('EventCategory.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EventCategory::destroy($id);

        Session::flash('success','Event Category deleted successfully.');
		
		return redirect()->route('EventCategory.index');
    }
}

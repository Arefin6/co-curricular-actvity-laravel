<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$event=Event::all();
		
        return view('admin.event.index')->with('events',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
		return view('admin.event.create');
		
    }
	
	public function search(Request $request)
    {
        
		return view('admin.event.create');
		
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
            'event_title' => 'required',
			
            'event_img'   => 'required|image',
			
            'event_content'   => 'required',
		
			
        ]);

        $event_img = $request->event_img;

        $event_img_new_name = time().$event_img->getClientOriginalName();

        $event_img->move('uploads/events', $event_img_new_name);

        $event = Event::create([
			
            'event_title' => $request->event_title,
			
			'event_img' => 'uploads/events/'.$event_img_new_name,
			
			'event_content' => $request->event_content,
           
            
            
        ]);

        Session::flash('success','event added successfully');

        return redirect()->back();

		
		
		
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
        
		$event=Event::find($id);
		
        return view('admin.event.edit')->with('event',$event);
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
			
            'event_title' => 'required',
			
			
            'event_content'   => 'required',
		
			
        ]);

		$event=Event::find($id);
		
		if($request->hasfile('event_img')){
			
			
        $event_img = $request->event_img;

        $event_img_new_name = time().$event_img->getClientOriginalName();

        $event_img->move('uploads/events', $event_img_new_name);
			
		$event->event_img = 'uploads/events/'.$event_img_new_name;	
			
		}
		
		 $event->event_title = $request->event_title;
		
         $event->event_content = $request->event_content;
		
		 $event->save();
		
		 Session::flash('success','event updated successfully');

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
        $event=Event::find($id);
		
		$event->delete();
		
		 Session::flash('success','event deleted successfully');

         return redirect()->back();
    }
}

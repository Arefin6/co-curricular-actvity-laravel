<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/test', function () {
    return view('event')
		
    ->with('firest_event',Event::orderBy('created_at','desc')->first())
		
 ->with('secend_event',Event::orderBy('created_at','desc')->skip(1)->take(1)->first())
 
 ->with('thired_event',Event::orderBy('created_at','desc')->skip(2)->take(1)->first())

  ->with('fourth_event',Event::orderBy('created_at','desc')->skip(3)->take(1)->first())
			
  ->with('fifth_event',Event::orderBy('created_at','desc')->skip(4)->take(1)->first())
			
  ->with('sixth_event',Event::orderBy('created_at','desc')->skip(5)->take(1)->first());		
});
*/
Route::get('/about', function () {
    return view('about');
});


Route::get('/result',function(){
	
	 $events= \App\Event :: where('event_title','like', '%'. request('search').'%')->get();
	
	
	return view('result')->with('events',$events)
	
	                      ->with('event_title','Search result :',request('search'))
			                  	
	                      ->with('search',request('search'));
	
	
	
        
	});

Route::get('/search/student',function(){
	
	 $categories= \App\Category :: where('name','like', '%'. request('search').'%')->get();
	
	
	return view('student_search')->with('category',$categories)
		
		                      ->with('students',\App\Student::all())
			                  	
	                      ->with('search',request('search'));
	
	
	
        
	});





Route::get('/alllist',[
 
  'uses'=>'FroentendController@read',
	
  'as'  =>'alllist'


]);

Route::get('/home/front',[
 
  'uses'=>'StudentControlleer@home',
	
  'as'  =>'home.front'


]);


Route::get('/events/index',[
 
  'uses'=>'FroentendController@index',
	
  'as'  =>'events.index'


]);

Route::get('/perfrom/login',[
 
  'uses'=>'PerfomerController@show',
	
  'as'  =>'perfrom.login'


]);

Route::post('/perfrom/login/user',[
 
  'uses'=>'PerfomerController@login',
	
  'as'  =>'perfrom.user.login'


]);

Route::get('/perfrom/login/user',[
 
  'uses'=>'PerfomerController@login',
	
  'as'  =>'perfrom.user.login'


]);
Route::get('/perfrom/register',[
 
  'uses'=>'PerfomerController@register',
	
  'as'  =>'perfrom.register'


]);

Route::get('/perfrom/index',[
 
  'uses'=>'PerfomerController@index',
	
  'as'  =>'perfrom.index'


]);


Route::post('/perfrom/register/store',[
 
  'uses'=>'PerfomerController@store',
	
  'as'  =>'perfrom.store'


]);





Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

Route::get('/student/create',[
 
  'uses'=>'StudentControlleer@create',
  'as'  =>'student.create'


]);
Route::post('/student/store',[
 
  'uses'=>'StudentControlleer@store',
  'as'  =>'student.store'


]);
Route::get('/student/index',[
 
  'uses'=>'StudentControlleer@index',
  'as'  =>'student.index'


]);
Route::get('/students/edit/{id}',[
 
  'uses'=>'StudentControlleer@edit',
  
  'as'  =>'students.edit'


]);
Route::post('/students/update/{id}',[
 
  'uses'=>'StudentControlleer@update',
  
  'as'  =>'students.update'


]);
Route::get('/students/delete/{id}',[
 
  'uses'=>'StudentControlleer@destroy',
  
  'as'  =>'students.delete'


]);

Route::get('/category/create',[
 
  'uses'=>'CategoriesControlleer@create',
  'as'  =>'category.create'


]);
Route::get('/category/index',[
 
  'uses'=>'CategoriesControlleer@index',
  
  'as'  =>'category.index'


]);

Route::get('/category/edit/{id}', [
	
        'uses' => 'CategoriesControlleer@edit',
	
        'as' => 'category.edit'
    ]);
 Route::get('/category/delete/{id}', [
	
        'uses' => 'CategoriesControlleer@destroy',
	
        'as' => 'category.delete'
    ]);


Route::post('/category/store',[
 
  'uses'=>'CategoriesControlleer@store',
  
  'as'  =>'category.store'


]);



Route::post('/category/update/{id}',[
 
  'uses'=>'CategoriesControlleer@update',
  
  'as'  =>'category.update'


]);

Route::get('/category/delete/{id}',[
 
  'uses'=>'CategoriesControlleer@destroy',
  
  'as'  =>'category.delete'


]);

Route::get('/event/index',[
 
  'uses'=>'EventController@index',
  
  'as'  =>'event.index'


]);
	
Route::get('/event/search',[
 
  'uses'=>'EventController@search',
  
  'as'  =>'event.search'


]);

Route::get('/event/create',[
 
  'uses'=>'EventController@create',
  
  'as'  =>'event.create'


]);
Route::get('/event/edit/{id}',[
 
  'uses'=>'EventController@edit',
  
  'as'  =>'event.edit'


]);


Route::post('/event/store',[
 
  'uses'=>'EventController@store',
  
  'as'  =>'event.store'


]);

Route::post('/event/update/{id}',[
 
  'uses'=>'EventController@update',
  
  'as'  =>'event.update'


]);

Route::get('/event/delete/{id}',[
 
  'uses'=>'EventController@destroy',
  
  'as'  =>'event.delete'


]);
	
Route::get('/user/approve/{id}',[
	
		'uses'=>'PerfomerController@approve',
	
		'as'=>'user.approve'
		 
	]);
	
	Route::get('/user/notapprove/{id}',[
	
		'uses'=>'PerfomerController@notapprove',
	
		'as'=>'user.notapprove'
		 
	]);
	
	Route::get('/user/edit/{id}',[
	
		'uses'=>'PerfomerController@edit',
	
		'as'=>'user.edit'
		 
	]);
	
	Route::post('/user/update/{id}',[
	
		'uses'=>'PerfomerController@update',
	
		'as'=>'user.update'
		 
	]);
	
	Route::get('/user/delete/{id}',[
		
		'uses'=>'PerfomerController@delete',
		
		'as'=>'user.delete'
		 	
     ]);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

@include('layouts.header')

 <div class="container">
 	
 	<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Search result : {{$search}}</h1>
    </div>
  </div>
  
  <div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
            <div class="row">
               <div class="case-item-wrap">
                       
                       
                    @if($events->count()>0)
                      
                       @foreach($events as $event)    
                         
                   <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="{{$event->event_img}}" alt="our case" width="200px">
                                    </div>
                                    
                                </div>
                            </div>
                            
                              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                       <h2>{{$event->event_title}}</h2>
                                    </div>
                                    
                                </div>
                            </div>
                            
                              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <p>{{$event->event_content}}</p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                      @endforeach    
                         
                    @else
                      
                      <h1 class="text-center"> No Result found</h1>
                       
                       
                     @endif                    
                        
                      
                            
                  </div>
            </div>

            <!-- End Post Details -->
           
            <!-- Sidebar-->

            

            <!-- End Sidebar-->

        </main>
    </div>
</div>

 	
 </div>
  


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
 <style>
  body{
    background-color:#444;
  }
 </style> 

    <div class="row mt-5">
    @if($eventsCategory->count()>0)
      @foreach($eventsCategory as $event) 
       <div class="card col-md-3 p-4 ml-5 bg-warning" style="width: 18rem;">
        <img src="{{ asset('' . $event->img) }}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="{{route('event.category',['id'=>$event->id])}}" class="text-white text-center">{{$event->name}}</a></h5>
          
        </div>
      </div>
      @endforeach
    </div>

 

                      @else
                        <tr>
                          <th colspan="5" class="text-center">No Students</th>
                        </tr>
                        
                      @endif	

</body>
</html>
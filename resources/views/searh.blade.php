<head>
    <title>Metropolitan University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('front-end')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{asset('front-end')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/style.css">
  </head>
      <div class="panel panel-default">
       <div class="panel-title text-center">
       		Students
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       Img
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Eamil
                    </th>
                    
					<th>
                        Student id
                    </th>
                    
                    <th>
                        Department
                    </th>
                    
                    <th>
                        Category
                    </th>
                </thead>

                <tbody>
                   @if($students->count()>0)
               
                    @foreach($students as $student)
                        <tr>
                            <td>
                           <img src="{{ asset('' . $student['img']) }}"   width="70px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>{{$student['name'] }}</td>
                            <td>{{$student['email'] }}
                            </td><td>{{$student['stu_id'] }}</td>
                            <td>{{$student['dept'] }}</td>
                            <td>{{$student->category['name'] }}</td></tr>
                            
                         @endforeach
                        @else
                   
                    	<tr>
                    		<th colspan="5" class="text-center">No student</th>
                    	</tr>
                    	 @endif	
                    	
                </tbody>
            </table>
        </div>
    </div>div class="panel panel-default">
       <div class="panel-title text-center">
       		Students
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       Img
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Eamil
                    </th>
                    
					<th>
                        Student id
                    </th>
                    
                    <th>
                        Department
                    </th>
                    
                    <th>
                        Category
                    </th>
                </thead>

                <tbody>
                   @if($students->count()>0)
               
                    @foreach($students as $student)
                        <tr>
                            <td>
                           <img src="{{ asset('' . $student['img']) }}"   width="70px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>{{$student['name'] }}</td>
                            <td>{{$student['email'] }}
                            </td><td>{{$student['stu_id'] }}</td>
                            <td>{{$student['dept'] }}</td>
                            <td>{{$student->category['name'] }}</td></tr>
                            
                         @endforeach
                        @else
                   
                    	<tr>
                    		<th colspan="5" class="text-center">No student</th>
                    	</tr>
                    	 @endif	
                    	
                </tbody>
            </table>
        </div>
    </div>
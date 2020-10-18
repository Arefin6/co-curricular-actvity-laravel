


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Co-Curricular Acvity</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.html" />
</head>

<body class="sidebar-lite">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
               @include('admin.includes.errors')
              <form action="{{ route('student.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
				<div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
				<div class="form-group">
                    <label for="stu_id">Student Id:</label>
                    <input type="text" name="stu_id" class="form-control">
                </div>
				<div class="form-group">
                    <label for="img">Student image</label>
                    <input type="file" name="img" class="form-control">
                </div>
				<select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
				<div class="form-group">
                    <label for="dept">Department:</label>
                    <input type="text" name="dept" class="form-control">
                </div>
                
                
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Join Us</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin')}}/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('admin')}}/js/misc.js"></script>
  <script src="{{asset('admin')}}/js/settings.js"></script>
  <!-- endinject -->
  
  <script src="/js/app.js"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
  
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
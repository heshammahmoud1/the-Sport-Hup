
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta
    name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
  />
  <meta
    name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
  />
  <meta name="robots" content="noindex,nofollow" />
  <title>Add Employees</title>
  <!-- Favicon icon -->
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{asset('images2/u.jpg')}}"
  />
  <!-- Custom CSS -->
  <link href="assets/css/style.min.css" rel="stylesheet" />
  </head>

  <body>

    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >

      <header class="topbar" data-navbarbg="skin5">
          
        @if (session('msg'))
          <div class="alert alert-dark">  {{session('msg')}}</div>
        @endif
    
      </header>

      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('welcome2')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Home</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">players </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="{{route('show_data')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> All players </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('insert')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Add player </span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <div class="page-wrapper">
      

       
         <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal" action="{{route('insert')}}" enctype="multipart/form-data" method="post">
                 @csrf
                    <div class="card-body">
                  <div class="form-group row">
                      <label
                        for="ssn"
                        class="col-sm-3 text-end control-label col-form-label"
                        >SSN</label
                      >
                      <div class="col-sm-9">
                        <input
                        value="{{old('ssn')}}"
                          type="text"
                          class="form-control"
                          id="ssn"
                          placeholder="SSN Here"
                          name="ssn"
                        />
                      </div>
                    </div>
               @section('ssn')
               @error('ssn')
               <a class="alert alert-danger d-block mx-auto col-4 row-2 ">SSN not valid</a>
           @enderror
               @show
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Fname</label
                      >
                      <div class="col-sm-9">
                        <input
                          value="{{old('fname')}}"
                          type="text"
                          class="form-control"
                          id="fname"
                          placeholder="First Name Here"
                          name="fname"
                        />
                     
                      </div>
                    </div>
                    @error('fname')
                    <a class="alert alert-danger d-block mx-auto col-4 w-0">fname wrong</a>
                @enderror
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Lname</label
                      >
                    
                      <div class="col-sm-9">
                        <input
                          value="{{old('lname')}}"
                          type="text"
                          class="form-control"
                          id="lname"
                          placeholder="Last Name Here"
                          name="lname"
                        />
                      </div>
                    </div>
                    @error('lname')
                    <a class="alert alert-danger d-block mx-auto col-4 w-0">lname not valid</a>
                @enderror
                    <div class="form-group row">
                      <label
                        for="email"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Email</label
                      >
                      <div class="col-sm-9">
                        <input
                          value="{{old('email')}}"
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Email Here"
                          name="email"
                        />
                      </div>
                    </div>
                    @error('email')
                    <a class="alert alert-danger d-block mx-auto col-4 w-0">email not valid</a>
                @enderror
                    <div class="form-group row">
                      <label
                        for="image"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Image</label
                      >
                      <div class="col-sm-9">
                        <input
                          value="{{old('image')}}"
                          type="file"
                          class="form-control"
                          id="image"
                          placeholder="First Name Here"
                          name="image"
                        />
                      </div>
                    </div>
                    @error('image')
                    <a class="alert alert-danger d-block mx-auto col-4 w-0">image not valid</a>
                @enderror
                    <div class="form-group row">
                    <label
                        for="email"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Gender</label
                      >
                      <div class="col-md-9">
                        <div class="form-check">
                          <input

                            type="radio"
                            class="form-check-input"
                            id="customControlValidation1"
                            name="gender"
                            value="m"
                          />
                          <label
                            class="form-check-label mb-0"
                            for="customControlValidation1"
                            >Male</label
                          >
                        </div>
                        <div class="form-check">
                          <input
                            type="radio"
                            class="form-check-input"
                            id="customControlValidation2"
                            name="gender"
                            value="f"
                          />
                          <label
                            class="form-check-label mb-0"
                            for="customControlValidation2"
                            >Female</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Department</label
                      >
                      <div class="col-sm-9">
                        <select class="form-control" name="dno">
                           @foreach ($show as $val)
                               <option value="{{$val->id}}">{{$val->name}}</option>
                           @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                      <button type="submit" class="btn btn-primary">
                        Add
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

        </div>
        <!-- End Container fluid -->

        <!-- footer -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- End footer -->
        
      </div>
      <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/sparkline.js"></script>
<!--Wave Effects -->
<script src="assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="assets/js/custom.min.js"></script>
  </body>
</html>

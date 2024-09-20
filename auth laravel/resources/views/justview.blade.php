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
  <title>view</title>
  <!-- Favicon icon -->
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{asset('images2/m.jpg')}}"
  />
  <!-- Custom CSS -->
  <link href="assets/css/style.min.css" rel="stylesheet" />
    <link
      href="assets/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
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

</div>

        <!-- End Bread crumb -->

        <!-- Container fluid -->
        <div class="container-fluid">
          @if (session('msg'))
             <div class="alert alert-primary">
              {{session('msg')}}
             </div>
          @endif
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-17">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">show Datatable</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                  
                      <thead>
                        <tr >
                          <th  class=" p-4 m-5" >ssn</th>
                          <th  class=" p-4 m-5">fname</th>
                          <th  class=" p-4 m-5">lname</th>
                          <th  >email</th>
                          <th  >dp_id</th>
                          <th >photo</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                          @foreach ($data as $item)
                         
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->fname }}</td>
                          
                          <td>{{ $item->lname }}</td>
                          
                          <td>{{ $item->email }}</td>
                          
                          <td >{{ $item->dp_id }}</td>

                          
                  
                          <td>
                            @if($item->image)
                         
                                <img src="{{ asset('storage/'.$item->image) }}" alt="Employee Image" width="300px">
                            @else
                            
                                <p>No image insert y player</p>
                            @endif
                     
                      
                        
                                          
                       <td  style="margin: 6px">
                       
                        <div class="border-top ">
                          <div class="card-body ">
                            <a   href="{{route('delete_name',$item->id )}}"  type="submit" class="btn btn-danger ">
                              DELETE
                            </a>
                            <a  href="{{route('update_name',$item->id)}}" type="submit" class="btn btn-success  m-3">
                              UPDATE
                            </a>
                          
                          </div>
                        </div>
                       </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>
     
          <!-- End Page Content -->

        </div>
        <!-- End Container fluid -->
      
        <!-- footer -->
    
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
    
    <!-- this page js -->
    <script src="assets/js/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>

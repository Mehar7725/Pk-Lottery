<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/royalui-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 11:20:01 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Ad Details</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  {{-- Bootstrap Datatable CSS CDN --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
       {{-- ====Sweet Aleart ==== --}}
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="assets/js/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/admin/images/favicon.png" />
</head>

<body>

  @if(Session::has('warning'))
  <script>
    swal("Warning!", "{{ Session::get('warning') }}", "warning");
    </script>
  @endif

  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
   {{-- Navbar === --}}
   <x-admin-nav/>
   <!-- partial -->
   <div class="container-fluid page-body-wrapper">
     <!-- partial:partials/_sidebar.html -->
     {{-- Sidebar === --}}
     <x-admin-sidebar/>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row pt-3">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">All Add Image Details</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="table-responsive">
              <table  id="example" class="table table-striped" style="width:100%">
                <thead class="bg-primary">
                  <tr>
                    <th>Image</th>
                    <th>Acction</th>
                  </tr>
                </thead>
                <tbody>
                  @if (!empty($adds))
                  @foreach ($adds as $item)
                  <tr>
                    <td class="text-center">
                      <img src="assets/add/img/{{$item->image}}" alt="" srcset="" style="height: 60px;width: 50px ; border-radius: 0px;">
                    </td>
                    <td class="text-center">
                      <a href="/add-delete/{{$item->id}}" class="btn btn-danger ">Delete</a>
                    </td>
                  </tr>
                      
                  @endforeach
                      
                  @endif
                 
                </tbody>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="assets/admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assets/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/admin/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/admin/js/off-canvas.js"></script>
  <script src="assets/admin/js/hoverable-collapse.js"></script>
  <script src="assets/admin/js/template.js"></script>
  <script src="assets/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->   
  {{-- Bootstrap Datatable Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
     new DataTable('#example');
   </script>
</body>


<!-- Mirrored from demo.bootstrapdash.com/royalui-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 11:20:10 GMT -->

</html>
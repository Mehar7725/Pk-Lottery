<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/royalui-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 11:20:01 GMT -->

<head>
  <base href="/public">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Partner Commission</title>
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
  
  @if(Session::has('info'))
  <script>
    swal("Info!", "{{ Session::get('info') }}", "info");
    </script>
  @endif
  
  @if(Session::has('success'))
  <script>
    swal("Success!", "{{ Session::get('success') }}", "success");
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
                  <h4 class="font-weight-bold mb-0">Commission Details</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="table-responsive">
              <table  id="example" class="table table-striped" style="width:100%">
                <thead class="bg-primary">
                  <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>CNIC</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Lottery Code</th>
                    <th>Lottery Name</th>
                    <th>Commission(%)</th>
                    <th>Status</th>
                    <th>Acction</th>
                  </tr>
                </thead>
                <tbody>
                  @if (!empty($commission))
                  @foreach ($commission as $item)

                  <tr>
                    <td>{{$item->date}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->father_name}}</td>
                    <td>{{$item->cnic}}</td>
                    <td>{{$item->dob}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->lottery_code}}</td>
                    <td>{{$item->lottery_name}}</td>
                    <td>{{$item->commission}}</td>
                    @if ($item->status == 0)
                    <td class="text-info">Pending</td>
                    <td>
                      <a href="/commission-approve/{{$item->id}}"  class="btn btn-success">Approve</a>
                      <a href="/commission-decline/{{$item->id}}"  class="btn btn-danger">Decline</a>
                    </td>
                    @elseif($item->status == 1)
                    <td class="text-success">Approved</td>
                    <td>
                      <a href="/commission-pending/{{$item->id}}"  class="btn btn-info">Pending</a>
                      <a href="/commission-decline/{{$item->id}}"  class="btn btn-danger">Decline</a>
                    </td>
                    @elseif($item->status == 2)
                    <td class="text-danger">Declined</td>
                    <td>
                      <a href="/commission-pending/{{$item->id}}"  class="btn btn-info">Pending</a>
                      <a href="/commission-approve/{{$item->id}}"  class="btn btn-success">Approve</a>
                    </td>
                    @endif
           

                    
                    
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
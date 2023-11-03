<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/royalui-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 11:20:01 GMT -->

<head>
  <base href="/public">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Partner Lottery</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
         {{-- ====Sweet Aleart ==== --}}
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="assets/js/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  {{-- Bootstrap Datatable CSS CDN --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/admin/images/favicon.png" />
</head>

<body>

  @if(Session::has('error'))
  <script>
    swal("Error!", "{{ Session::get('error') }}", "error");
    </script>
  @endif
  

  @if(Session::has('info'))
  <script>
    swal("Info!", "{{ Session::get('info') }}", "info");
    </script>
  @endif
  
  

  @if(Session::has('warning'))
  <script>
    swal("Warning!", "{{ Session::get('warning') }}", "warning");
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
                  @if ($status == 0)
                      
                  <h4 class="font-weight-bold mb-0">Partner Pending Lottery</h4>
                  @elseif($status == 1)
                  <h4 class="font-weight-bold mb-0">Partner Approved Lottery</h4>
                  
                  @elseif($status == 2)
                  <h4 class="font-weight-bold mb-0">Partner Claimed Lottery</h4>

                  @elseif($status == 3)
                  <h4 class="font-weight-bold mb-0">Partner Lottery Claim in Pending</h4>
                 
                  @elseif($status == 4)
                  <h4 class="font-weight-bold mb-0">Partner Not Approved Lottery</h4>

                  @elseif($status == 5)
                  <h4 class="font-weight-bold mb-0">Visiter Claim Declined Lottery</h4>

                  @endif
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table  id="example" class="table table-striped" style="width:100%">
                <thead class="bg-primary">
                  <tr>
                    <th>Name</th>
                    <th>F.Name</th>
                    <th>CNIC</th>
                    <th>Loutrey Code</th>
                    <th>D-O-B</th>
                    <th>Transaction ID*</th>
                    <th>Referral CNIC</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Transaction Image</th>
                    <th>Partner Commission(%)</th>
                    <th>Status</th>
                    <th>Payment Type</th>
                    <th>Acctions</th>
                  </tr>
                </thead>
                <tbody>
                  @if (!empty($lotteries))
                  @foreach ($lotteries as $item)

                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->father_name}}</td>
                    <td>{{$item->cnic}}</td>
                    <td>{{$item->lottery_code}}</td>
                    <td>{{$item->dob}}</td>
                    <td>{{$item->transaction_id}}</td>
                    <td>{{$item->reffral_cnic}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->price}}</td>
                   
                    <td><img src="assets/trans/{{$item->transaction_image}}" alt="" onclick="window.open(this.src, '_blank');" style="cursor: pointer;"></td>
                   
                    <td>{{$item->partner_commission}}</td>

                    @if ($status == 0)
                    <td class="text-info"> Pending </td>
                    @elseif($status == 1)
                    <td class="text-success">Approved</td>
                    
                    @elseif($status == 2)
                    <td class="text-success">Claimed</td>
  
                    @elseif($status == 3)
                    <td class="text-info"> Claim in Pending</td>
                   
                    @elseif($status == 4)
                    <td class="text-danger">  Not Approved</td>
  
                    @elseif($status == 5)
                    <td class="text-danger">Claim Declined</td>
  
                    @endif
                    
                     
                      @if ($item->payment_type == 0)
                      <td  >Online Payment</td>
                      @elseif($item->payment_type == 1)
                      <td  >Cash Payment</td>  
                      
                      @elseif($item->payment_type == 2)
                      <td  >No Payment</td>  

                      @endif
                    
                    <td>
                      @if ($item->status == 0)
                      <a href="/partner-lottery-approve/{{$item->id}}"  class="btn btn-info">Approve</a>
                      <a  href="/partner-lottery-decline/{{$item->id}}"  class="btn btn-warning">Decline</a>
                      @endif
                  
                      <a href="partner-lottery-delete/{{$item->id}}"  class="btn btn-danger">Detele</a>
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
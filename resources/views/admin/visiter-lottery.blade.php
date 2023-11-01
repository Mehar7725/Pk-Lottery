<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/royalui-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 11:20:01 GMT -->

<head>
  <base href="/public">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
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
                      
                  <h4 class="font-weight-bold mb-0">Visiter Pending Lottery</h4>
                  @elseif($status == 1)
                  <h4 class="font-weight-bold mb-0">Visiter Approved Lottery</h4>
                  
                  @elseif($status == 2)
                  <h4 class="font-weight-bold mb-0">Visiter Decline Lottery</h4>

              
                  @endif
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead class="bg-primary">
                  <tr>
                    <th>Name</th>
                    <th>F.Name</th>
                    <th>CNIC</th>
                    <th>Loutrey Code</th>
                    <th>D-O-B</th>
                    <th>Transaction ID*</th>
                    <th>Referral CNIC</th>
                    <th>Referral Name</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>CNIC Front</th>
                    <th>CNIC Back</th>
                    <th>Transaction Image</th>
                    <th>Status</th>
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
                    <td>{{$item->reffral_name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->price}}</td>
                    <td><img src="assets/claim/cnic/front/{{$item->cnic_front}}" alt=""  onclick="window.open(this.src, '_blank');" style="cursor: pointer;"></td>
                    <td><img src="assets/claim/cnic/back/{{$item->cnic_back}}" alt="" onclick="window.open(this.src, '_blank');" style="cursor: pointer;"></td>
                    <td><img src="assets/claim/trans/{{$item->transaction_image}}" alt="" onclick="window.open(this.src, '_blank');" style="cursor: pointer;"></td>
                   
                   

                    @if ($status == 0)
                    <td class="text-info"> Pending </td>
                    @elseif($status == 1)
                    <td class="text-success">Approved</td>
                    
                    @elseif($status == 2)
                    <td class="text-success">Declined</td>
  
                    @endif
                    
                    <td>
                      @if ($item->status == 0)
                      <a href="/visiter-lottery-approve/{{$item->id}}"  class="btn btn-info">Approve</a>
                      <a  href="/visiter-lottery-decline/{{$item->id}}"  class="btn btn-warning">Decline</a>
                      @endif
                  
                      <a href="visiter-lottery-delete/{{$item->id}}"  class="btn btn-danger">Detele</a>
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
</body>


<!-- Mirrored from demo.bootstrapdash.com/royalui-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 11:20:10 GMT -->

</html>
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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
                  <h4 class="font-weight-bold mb-0">Add Account</h4>
                </div>

              </div>
            </div>
          </div>

          <form action="/create-account-detail" method="POST"   class="row g-3">
            @csrf
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Account Name</label>
              <input type="text" name="account_name" class="form-control" placeholder="EasyPysa" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Holder Name</label>
              <input type="text" name="holder_name" class="form-control" id="inputPassword4" placeholder="Mian G" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Account Number</label>
              <input type="number" name="account_number" class="form-control" id="inputEmail4" placeholder="030011234567" required>
            </div>

         
            <div class="col-12">
              <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
          </form>

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
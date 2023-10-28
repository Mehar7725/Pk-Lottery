<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!--boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--boostrap css -->
     {{-- ====Sweet Aleart ==== --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="assets/js/sweetalert.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/partner/css/updateprofile.css">
<!-- custom css -->



</head>
<body>
          
  @if(Session::has('success'))
  <script>
    swal("Success!", "{{ Session::get('success') }}", "success");
    </script>
  @endif
    <!-- header start -->
    <!-- header start -->
    <x-partner-nav/>
<!-- header-end -->
<!-- header-end -->
<!-- cover start-->
<div class="container-fluid">
    <div class="container login-h1">
        <div class="row">
            <div class="col-md-12">
<h1>
 UPDATE PROFILE
</h1>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="container login-form">
        <div class="row">
            <div class="col-md-12 buton-login">
<form action="/update-profile-action" method="POST" enctype="multipart/form-data">
  @csrf
  <p>Update profile</p>
<input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Profile" accept=".jpg,.jpeg,.png" required>

  
   <button type="submit" class="btn ">Submit</button>
  

</form>



            </div>
        </div>


    </div>
</div>
<!-- cover end  -->


<!-- footer start-->

<!-- footer start-->
<x-visiter-footer/>
<!-- footer END-->

</body>
</html>
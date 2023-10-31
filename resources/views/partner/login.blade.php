<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/partner/css/login.css">
<!-- custom css -->



</head>
<body>

      
  @if(Session::has('error'))
  <script>
    swal("Error!", "{{ Session::get('error') }}", "error");
    </script>
  @endif

    <!-- header start -->
<div class="container-fluid header ">
    <div class="container inner-header ">
        <div class="row">
            <div class="col-md-12  customer-support  ">
               <a href="/contact-us" class=" link"> Customer Support</a>
               <!-- <div class="dropdown arrow">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Eng
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Urd</a></li>
                  
                </ul>
              </div> -->
            </div>
<hr style="color: #A49BE4; height: 1px; margin: 0px; ">
        </div>
        <!-- navbar -->
        <div class="row">
            <div class="col-md-12 navbarr">

                    <div class="container-fluid p-0">
                      <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
                     
                      
                    </div>
                  
            </div>
        </div>





     </div>

</div>
<!-- header-end -->
<!-- cover start-->
<div class="container-fluid">
    <div class="container login-h1">
        <div class="row">
            <div class="col-md-12">
<h1>
    LOGIN
</h1>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <form action="/login-partner" method="POST">
    @csrf
    <div class="container login-form">
        <div class="row">
            <div class="col-md-12">
<p>CNIC</p>
<input type="number" name="cnic" class="form-control" id="exampleFormControlInput1" placeholder="CNIC" required>

<p>Password</p>
<input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" required> 
            </div>
        </div>
<div class="col-md-12 buton-login">
   <a href="index.html">
    <button type="submit" class="btn ">login</button>
   </a>
</div>

    </div>
</form>
</div>
<!-- cover end  -->


<!-- footer start-->

<!-- footer start-->
<x-visiter-footer/>
<!-- footer END-->
</body>
</html>
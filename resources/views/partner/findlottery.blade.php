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
<link rel="stylesheet" href="assets/partner/css/findlottery.css">
<!-- custom css -->

</head>
<body>

    @if(Session::has('error'))
    <script>
      swal("Error!", "{{ Session::get('error') }}", "error");
      </script>
    @endif

    <!-- header start -->
    <!-- header start -->
    <x-partner-nav/>
<!-- header-end -->
<!-- header-end -->
<!-- cover start-->
<div class="container-fluid cover">
<div class="container contaner">
    <div class="row">
        <div class="col-md-12 heading-find ">
           <h1>FIND Lottery</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 lottery-cnic">
            <p>ENTER YOUR CNIC</p>
        </div>
        <div class="col-md-2"></div>
    </div>
    <form action="/my-lottery" method="POST">
        @csrf
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7 input-number">
            <input type="number" name="cnic" class="" placeholder="35***********" required>

        </div>
        <div class="col-md-2 button-check"><a ><button type="submit" class="btn">CHECK HERE</button></a></div>
    </div>
</form>

</div>


</div>
<!-- cover end  -->


<!-- footer start-->

<!-- footer start-->
<x-visiter-footer/>
<!-- footer END-->
</body>
</html>
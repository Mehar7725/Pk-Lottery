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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/visitor/css/findlottery.css">
<!-- custom css -->

</head>
<body>
    <!-- header start -->
    <x-visiter-nav/>
<!-- header-end -->
<!-- cover start-->
<div class="container-fluid cover">
<div class="container contaner">
    <div class="row">
        <div class="col-md-12 heading-find ">
           <h1>FIND Lottery</h1>
        </div>
    </div>
  <form action="">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 lottery-cnic">
          <p>ENTER YOUR CNIC</p>
      </div>
      <div class="col-md-2"></div>
  </div>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-7 input-number">
          <input type="number"class="" placeholder="35***********" >

      </div>
      <div class="col-md-2 button-check"><a href="/our-lottery"><button type="button" class="btn">CHECK HERE</button></a></div>
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
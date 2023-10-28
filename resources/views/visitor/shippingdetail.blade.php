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
<link rel="stylesheet" href="assets/visitor/css/shippingdetail.css">

<!-- custom css -->

</head>
<body>
    <!-- header start -->
    @if (Auth::user())
    @if (Auth::user()->role = 0)
    <x-visiter-nav/>
    @else
    <x-partner-nav/>
    @endif
   
    @else
    <x-visiter-nav/>
    @endif
    
<!-- header-end -->
<!-- cover start-->

<div class="container-fluid cover">

    <div class="container shipping-detail">
        <div class="row">
            <div class="col-md-12">
                <p>Shipping Details</p>
            </div>
        </div>
    </div>
   
<div class="container shipping-form">
  
  
 <form action="">
  <div class="row">
    <div class="col-md-6">
     <p class=" form-name">Name</p>
<input type="text" class=" form-input"  placeholder="Name">
    </div>
    <div class="col-md-6">
     <p class=" form-name">Father Name</p>
<input type="text" class=" form-input"  placeholder="Father Name">
</div>
 </div>

 <div class="row">
    <div class="col-md-6">
     <p class=" form-name">CNIC</p>
<input type="number" class=" form-input"  placeholder="CNIC">
    </div>
    <div class="col-md-6">
     <p class=" form-name">Lottery Code</p>
<input type="number" class=" form-input"  placeholder="Lottery Code">
</div>
 </div>

 <div class="row">
    <div class="col-md-6">
     <p class=" form-name">DOB</p>
<input type="date" class=" form-input"  placeholder="DD/MM/YYYY" style="    color: gray;">
    </div>
    <div class="col-md-6">
     <p class=" form-name">CNIC Image Front</p>
<input type="file" class=" form-input"  placeholder="CNIC Image Front">
</div>
 </div>

 <div class="row">
    <div class="col-md-6">
     <p class=" form-name">CNIC Image Back</p>
<input type="file" class=" form-input"  placeholder="CNIC Image Back">
    </div>
    <div class="col-md-6">
     <p class=" form-name">Transaction ID</p>
<input type="number" class=" form-input"  placeholder="Transaction ID">
</div>
 </div>
 <div class="row">
    <div class="col-md-6">
     <p class=" form-name">Referral Code</p>
<input type="number" class=" form-input"  placeholder="Referral Code">
    </div>
    <div class="col-md-6">
     <p class=" form-name">Address</p>
<input type="text" class=" form-input"  placeholder="Address">
</div>
 </div>


 <div class="row">
    <div class="col-md-3 col-sm-2"></div>
    <div class="col-md-5 col-sm-6 col-xs-12 shipping-detail-btn">
        <button type="button" class="btn  ">SUBMIT</button>
    </div>
    <div class="col-md-3 col-sm-3"></div>
 </div>

 </form>

     <div class="row">
      <div class="col-md-12">
          <table class="table table-bordered">
            <thead class="text-center table-head-th">
              <tr>
                <th scope="col"># SR</th>
                <th scope="col">Account Name</th>
                <th scope="col">Account Number</th>
              </tr>
            </thead>
            <tbody class="text-center table-body-tr">
              <tr>
                <th scope="row">1</th>
                <td>Eassy Paisa (Shamas Nadeem)</td>
                <td>+923324038971</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Eassy Paisa (Shamas Nadeem)</td>
                <td>+923324038971</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td >Allied Bank (Usamaa Zafaar)</td>
                <td>0000999888777666</td>
              </tr>
            </tbody>
          </table>
        
      </div>
    </div>

</div>


<div class="container table-container">
  <!-- <div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="text-center table-head-th">
            <tr>
              <th scope="col"># SR</th>
              <th scope="col">Account Name</th>
              <th scope="col">Account Number</th>
            </tr>
          </thead>
          <tbody class="text-center table-body-tr">
            <tr>
              <th scope="row">1</th>
              <td>Eassy Paisa (Shamas Nadeem)</td>
              <td>+923324038971</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Eassy Paisa (Shamas Nadeem)</td>
              <td>+923324038971</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td >Allied Bank (Usamaa Zafaar)</td>
              <td>0000999888777666</td>
            </tr>
          </tbody>
        </table>
      
    </div>
  </div> -->
</div>

</div>
<!-- cover end  -->


<!-- footer start-->

<!-- footer start-->
<x-visiter-footer/>
<!-- footer END-->

</body>
</html>
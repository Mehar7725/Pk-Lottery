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
      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/partner/css/register.css">
<link rel="stylesheet" href="assets/partner/css/findlottery.css">

<!-- custom css -->

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

    <!-- header start -->
    <!-- header start -->
    <x-partner-nav/>
<!-- header-end -->
<!-- header-end -->
<!-- cover start-->

<div class="container-fluid coverr">

    <div class="container shipping-detail">
        <div class="row">
            <div class="col-md-12">
                <p>Shipping Details</p>
            </div>
        </div>
    </div>
   
<div class="container shipping-form">
  <form action="/ship-lottery-confirm" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row">
        <div class="col-md-6">
          
         <p class=" form-name">Name</p>
   <input type="text" name="name" class=" form-input"  placeholder="Name" required>
        </div>
        <div class="col-md-6">
         <p class=" form-name">Father Name</p>
   <input type="text" name="father_name" class=" form-input"  placeholder="Father Name" required>

 </div>
     </div>

     <div class="row">
        <div class="col-md-6">
         <p class=" form-name">CNIC</p>
   <input type="number" name="cnic" class=" form-input"  placeholder="CNIC" required>
        </div>
        <div class="col-md-6">
          <p class=" form-name">DOB</p>
         <input type="date" name="dob" class="form-input"  placeholder="DD/MM/YYYY" required>
         </div>
     
     </div>

     <div class="row"  >
      <div class="col-md-6">
        <p class=" form-name">Address</p>
  <input type="text" name="address" class=" form-input"  placeholder="Address" required>
</div>
        <div class="col-md-6">
          <p class=" form-name">Payment Type</p>
          <select name="payment_type" class=" text-dark  form-input" id="payment_type"  >
            <option value="0" selected>Online Payment</option>
            <option value="1">Cash Payment</option>
            <option value="2">No Payment</option>
          </select>
          
  </div>
    
  
     </div> 
     <div class="row" id="trans_detail">
       
        <div class="col-md-6">
          <p class=" form-name">Transaction Image</p>
    <input type="file" name="image" class=" form-input"  placeholder="Transaction ID" accept=".jpg,jpeg,.png" required>
  </div>
  <div class="col-md-6">
    <p class=" form-name">Transaction ID</p>
<input type="text" name="trans_id" class=" form-input"  placeholder="1478952364" required>
</div>
     </div>

     <div class="row">
     
   
     </div>

     <div class="row">
      <div class="col-md-6">
        <p class=" form-name">Shipping cost</p>
      <input type="number" name="cost" class=" form-input" value="{{$lottery->price}}"  placeholder="Rs.2000" value="Rs.2000" readonly required>
       </div>
       <div class="col-md-6">
        <p class=" form-name">Lottery Code</p>
  <input type="number" name="lottery_code" value="{{$lottery->code}}" class=" form-input"  placeholder="Lottery Code" readonly required>
  <input type="hidden" name="lottery_id" value="{{$lottery->id}}" class=" form-input"  placeholder="Lottery Code" required>
</div>
     </div>


     <div class="row">
        <div class="col-md-3 col-sm-2"></div>
        <div class="col-md-5 col-sm-6 col-xs-12 shipping-detail-btn">
            <button type="submit" class="btn  ">SUBMIT</button>
        </div>
        <div class="col-md-3 col-sm-3"></div>
     </div>
 
    </form>

     

    
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
<script>
  $('#payment_type').change(function () { 
   var value_pay =  $(this).val();
    
   if (value_pay == 0) {
    var div_create = '      <div class="col-md-6">'+
                        '<p class=" form-name">Transaction Image</p>'+
                  '<input type="file" name="image" class=" form-input"  placeholder="Transaction ID" accept=".jpg,jpeg,.png" required>'+
                '</div>'+
                '<div class="col-md-6">'+
                  '<p class=" form-name">Transaction ID</p>'+
              '<input type="text" name="trans_id" class=" form-input"  placeholder="1478952364" required>'+
              '</div>';
              $('#trans_detail').append(div_create);
     
   } 
    else {
      $('#trans_detail').html('');
   }


  });
</script>
</body>
</html>
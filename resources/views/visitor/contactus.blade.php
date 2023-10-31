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
     {{-- JQuery CDN ====== --}}
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     {{-- =======Toastr CDN ======== --}}
     <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
     {{-- =======Toastr CDN ======== --}}
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/visitor/css/contactus.css">

<!-- custom css -->

</head>
<body>


  @if (Session::has('error'))
  <script>

        toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.error("{{ session('error') }}");

                  
  </script>
  @endif


  @if (Session::has('success'))
  <script>

        toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.success("{{ session('success') }}");

                  
  </script>
  @endif




    <!-- header start -->
    @if (Auth::user())
    @if (Auth::user()->role == 0)
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

    
   
<div class="container shippingform">
  <div class="row mx-0">

  <div class="col-md-6">
    <form action="/contact-msg-forwerd" method="POST">
      @csrf
    <div class="row">
      <div class="col-md-12 contact-drop p-0">
        <p>Drop us a message</p>
      </div>
    
       
    
      <div class="row">
        <div class="col-md-12 p-0">
          <p class=" formname">Name<em>*</em></p>
       <input type="text" name="name" class=" forminput"  placeholder="Enter Your Full Name" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 p-0">
          <p class=" formname">Email<em>*</em></p>
       <input type="email" name="email" class=" forminput"  placeholder="Enter Your Email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 p-0">
          <p class=" formname">CNIC<em>*</em></p>
       <input type="number" name="cnic" class=" forminput"  placeholder="Enter Your CNIN" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 p-0">
          <p class=" formname">Problem<em>*</em></p>
      <textarea class="forminput" name="msg" id="" cols="30" rows="10" required="required"></textarea>
        </div>
      </div>
    
      <div class="row ">
        <div class="col-md-12 contact-message">
          <button type="submit" class="btn  ">SUBMIT</button>
        </div>
      </div>
   
    </div>
  </form>
    </div>

<!-- second row -->
<div class="col-md-6 crad-pading">
  <div class="row mx-0 ">
    <div class="col col-md-6 col-sm-6  p-0   ">
      <div class="card card-img " >
        <div class="row g-0">
          <div class="col-md-4 card-disply">
            <img src="assets/visitor/img/phone.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 ">
            <div class="card-body p-0">
              <p class="card-text card-para card-disply mb-0">Phone Number</p>
              <p class="card-text card-number card-disply mb-0">+0123 456789</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-md-6 col-sm-6  p-0">
      <div class="card card-img " >
        <div class="row g-0">
          <div class="col-md-4 card-disply " >
            <img src="assets/visitor/img/email.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 ">
            <div class="card-body p-0">
              <p class="card-text card-para card-disply mb-0">Email</p>
              <p class="card-text card-number card-disply mb-0">example@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12  contact-us-img-girl">
      <img src="assets/visitor/img/contact.png.png" alt="">
    </div>
  </div>
</div>

  </div>
  
    <!-- <div class="row">
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
   <input type="text" class=" form-input"  placeholder="CNIC Image Front">
 </div>
     </div>

     <div class="row">
        <div class="col-md-6">
         <p class=" form-name">CNIC Image Back</p>
   <input type="text" class=" form-input"  placeholder="CNIC Image Back">
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
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- caraousal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--caraousal  -->
     {{-- JQuery CDN ====== --}}
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/visitor/css/home.css">
<link rel="stylesheet" href="assets/visitor/css/popup.css">
<!-- custom css -->



</head>
<body>

    

    <!-- header start -->

    <x-visiter-nav/>


<!-- header-end -->
<!-- cover start-->
<div class="container-fluid cover">
<div class="container mr-marggin">
    <div class="row cover-heading-pading">
        <div class="col-md-7 heading-find  input-number ">
          {{-- <form action="/visiter-login" method="POST">
            @csrf --}}
           <h1>FIND REGISTRATION</h1>
           <p class="lottery-cnic">ENTER YOUR CNIC</p>
           <input type="number" id="cnic" name="cnic" class="" placeholder="35***********" >
      <!-- popup start -->

      <div class="container-fluid p-0 m-0">
        <div class="container main p-0 m-0">
            <div class="row ">
                <div class="col-md-12 block13">
                    <button type="button" id="log-visiter" class=" btn button-check  text-center" >Check Here</button>
          
                </div>
              {{-- </form> --}}
              {{-- Congrates Model ========== Start --}}
              <div class="modal fade" id="exampleModalcongrates" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog popupmodal">
                    <div class="modal-content popup-content">
                        <button type="button" class="btn-close cloze" data-bs-dismiss="modal" aria-label="Close">
                          <img src="assets/visitor/img/cloze.png" alt="">
                        </button>              
                        
            
                    
                        <div class="modal-body popup-cross">
                        <img src="assets/visitor/img/congratulation.png" alt="">
                      </div>
            
                        <div class="modal-body-2 paragraph-2 mb-0">
                            <p>Congratulation</p>
                        </div>

                       <div class="popup-para mb-0">
                          <p>Now you part of our best lotter website.</p>
                       </div>
                    </div>
                </div>
            </div>
              {{-- Congrates Model ========== End --}}
              {{-- Opps Model ========== Start --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog popupmodal">
                      <div class="modal-content popup-content">
                          <button type="button" class="btn-close cloze" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/visitor/img/cloze.png" alt="">
                          </button>              
                          
              
                      
                          <div class="modal-body popup-cross">
                          <img src="assets/visitor/img/cross.png" alt="">
                        </div>
              
                          <div class="modal-body-2 paragraph-2 mb-0">
                              <p class="mb-0">Oops</p>
                          </div>

                         <div class="popup-para mb-0">
                            <p>Your are not a member of this site.</p>
                         </div>
                      </div>
                  </div>
              </div>
               {{-- Opps Model ========== END --}}
             </div>
        </div>
    </div>

 <!-- popup end -->
        </div>
        <div class="col-md-5 bg-grident" style="overflow: hidden;">
            <div class=" card-cover-bg">
                @if (!empty($company_detail))
                    
                <img src="assets/company/img/{{$company_detail->add}}" alt="">
                @endif
          </div></div>
    </div>
    <!-- <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 lottery-cnic">
            <p>ENTER YOUR CNIC</p>
        </div>
        <div class="col-md-2"></div>
    </div> -->
    <!-- <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7 input-number">
            <input type="number"class="" placeholder="35***********" >

        </div>
        <div class="col-md-2 button-check"><button type="button" class="btn">CHECK HERE</button></div>
    </div> -->


</div>


</div>
<!-- cover end  -->

<div class="container-fluid  mt-5 mb-4">
    <div class="container contaner-owl">
      <div class="row">
    
        <div class="col-md-12">
            <div class="owl-carousel owl-3 owl-theme ">
            
                @if (!empty($add))
                @foreach ($add as $item)
    
                <div class="item bg-danger" style="height: 300px">
                    <img src="assets/add/img/{{$item->image}}" alt="" style="width: 100%;height: 100%;"></div>
                    
                @endforeach
                    
                @endif
             
    
               </div>
             
          
            </div>
        </div>
      </div>
    
    
    </div>


<!-- footer start-->
<x-visiter-footer/>
<!-- footer END-->

 <!-- owl carosul -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
 integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" 
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- owl carosul -->
   <script>

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots: false,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
                
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
            }
        }
    })
    </script>
    

<script>
    $('#log-visiter').click(function () { 
        var cnic = $('#cnic').val();
        if (cnic == null) {
            return false;
        }

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

     // Ajax Call
     $.ajax({
                    type: "POST",
                    url: "/visiter-login",
                    data:{cnic:cnic, _token: '{{csrf_token()}}'},
                    dataType : 'json',
                    success: function (response) {
                        if(response.success == true){
                            $('#exampleModalcongrates').css("display", "block");
                      $('#exampleModalcongrates').addClass('show');
                    } else if(response.error == true){
                        $('#exampleModal').css("display", "block");
                      $('#exampleModal').addClass('show');
                    }
                   
                      
                    }
                });



    });

    $('.cloze').click(function () { 
       $('#exampleModal').removeClass('show');
       $('#exampleModal').css("display", "none");
       location.reload();
        
    });
</script>

</body>
</html>
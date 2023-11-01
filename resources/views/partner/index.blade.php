<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- jquary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<!-- jquary -->
<!--boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--boostrap css -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- caraousal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--caraousal  -->

<!-- custom css -->
<link rel="stylesheet" href="assets/partner/css/index.css">
<link rel="stylesheet" href="assets/partner/css/ourlottery.css">
<!-- custom css -->

</head>
<body>
    <!-- header start -->
    <!-- header start -->
    <x-partner-nav/>
<!-- header-end -->
<!-- header-end -->
<!-- cover start-->
<div class="container-fluid cover">
<div class="container contaner-owl">
  <div class="row">

    <div class="col-md-12">
        <div class="owl-carousel owl-3 owl-theme ">
        
            @if (!empty($lotteries))
            @foreach ($lotteries as $item)

            <div class="item ">
                <a href="/ship-lottery/{{$item->id}}">
                   <div class="card Loutery-card" style="background-color:    #3a0405 ;">
                       <div class="card-img-head d-flex justify-content-center">
                           <img src="assets/lottery/img/{{$item->image}}" class="card-img-top img-fluid" alt="...">
       
                       </div>
                       <div class="card-body card-details-loutery" style="background-color:#90090D;">
                           <div class="card-loutery text-center  align-items-center">
       
                              <p class="card-lottery-contest">Contest No:</p>
                              <span B2T class="card-lottery-b2t">{{$item->code}}</span>
                          
       
                           </div>
                           <div class="card-detail ">
                               <div class="row card-mar">
                                   <div class="col col-md-6 col-sm-6 card-left">
                                       <b class="text-light">{{$item->name}}</b>
                                       <b class="text-light " style="position: relative;top: 10px;">Commission({{$item->partner_commission}}%)
                                    </b>  
                                   </div>
                                   <div class="col col-md-6 col-sm-6 card-right">
                                       
                                       <span> Rs.{{$item->price}}</span>
                                       <b class="text-light">Lottery Value</b>
                                   </div>
                               </div>
       

                           </div>
                           <hr style="color:lightgray">
       
                          
                                  <!-- card Bottom  -->
                                   <div class="row card-botom">
                                       <div class="col col-md-4 col-sm-4 card-botom-day">
                                         @php
                                         
                                             $datetimestart = date('Y-m-d');
                                            $to = \Carbon\Carbon::parse($item->claim_date_time);
                                            $from = \Carbon\Carbon::parse($datetimestart);
                                            $days = $to->diffInDays($from);
                                         @endphp
                                         @if ($item->claim_date_time <= $datetimestart)
                                         <span>Instant Claim</span>
                                         @else
                                         <span>{{$days}}D</span>
                                         @endif
                                      
                                        
                                        
                                       </div>
                                       <div class="col col-md-8 col-sm-8 card-botom-timer "> 
                                          <span>{{$item->remain_lotteries}}</span> <br>
                                          <p class="m-0">  Remaining</p>
       
                                       </div>
                                   </div>
       
       
                        
                           <!-- <div class="card-bottom-button">
                               <button type="button" class="btn btn-primary">Get Loutery</button>
                           </div> 
                         -->
                       </div>
                   </div>
                </a></div>
                
            @endforeach
                
            @endif
         

           </div>
         
      
        </div>
    </div>
  </div>


</div>


</div>
<!-- cover end  -->


<!-- footer start-->

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

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      {{-- ====Sweet Aleart ==== --}}
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="assets/js/sweetalert.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
<!--boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--boostrap css -->
  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/partner/css/buylottery.css">
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

<div class="container-fluid ">
  <div class="container card-container ">
      <h1> Buy Lottery </h1>

      <div class="row">
        @if (!empty($lotteries))
        @foreach ($lotteries as $item)

        <div class=" col-sm-4 col-md-4 ">
            <a href="/ship-lottery/{{$item->id}}"> <div class="card Loutery-card" style="background-color:    #3a0405 ;">
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
                         </div>
                         <div class="col col-md-6 col-sm-6 card-right">
                             
                             <span> ${{$item->price}}</span>
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
                            <span> Claim</span>
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
         </div></a>
         </div>
            
        @endforeach
            
        @endif
       
       

      </div>





  {{-- <div class="row">
    <div class="col-md-12 btn-col">
      <button> LOAD MORE</button>
    </div>
  </div> --}}

  </div>
</div>
<!-- cover end  -->


<!-- footer start-->

<!-- footer start-->
<x-visiter-footer/>
<!-- footer END-->

</body>
</html>
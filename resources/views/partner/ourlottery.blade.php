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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="assets/partner/css/ourlottery.css">
<link rel="stylesheet" href="assets/partner/css/findlottery.css">

<!-- custom css -->

</head>
<body>
    <!-- header start -->
    <!-- header start -->
    <x-partner-nav/>
<!-- header-end -->
<!-- header-end -->
<!-- cover start-->

<div class="container-fluid ">
  <div class="container card-container ">
      <h1> OUR Lottery </h1>

      <div class="row">

        @if (!empty($lotteries))
        @foreach ($lotteries as $item)
        @php
        $lottery = \App\Models\Lottery::find($item->lottery_id);
    @endphp

    @if (!empty($lottery))

    <div class=" col-sm-4 col-md-4 ">
        <div class="card Loutery-card" style="background-color:    #3a0405 ;">
            <div class="card-img-head d-flex justify-content-center">
                <img src="assets/lottery/img/{{$lottery->image}}" class="card-img-top img-fluid" alt="...">

            </div>
            <div class="card-body card-details-loutery" style="background-color:#90090D;">
                <div class="card-loutery text-center  align-items-center">

                   <p class="card-lottery-contest">Contest No:</p>
                   <span B2T class="card-lottery-b2t">{{$lottery->code}}</span>
               

                </div>
                <div class="card-detail ">
                    <div class="row card-mar">
                        <div class="col col-md-6 col-sm-6 card-left">
                            <b class="text-light">{{$lottery->name}}
                                </b> 
                            <b class="text-light " style="position: relative;top: 10px;">Commission({{$lottery->partner_commission}}%)
                                </b> 
                        </div>
                        <div class="col col-md-6 col-sm-6 card-right">
                            
                            <span> Rs.{{$lottery->price}}</span>
                            <b class="text-light">Lottery Value</b>
                        </div>
                    </div>


                </div>
                <hr style="color:lightgray">

                @if ($item->status == 0)
                    
                       <!-- card Bottom  -->
                       <div class="row card-botom">
                        <div class="col col-md-4 col-sm-4 card-botom-day">
                            <span>Pending</span>
                        </div>
                        <div class="col col-md-8 col-sm-8 card-botom-timer "> 
                           <span>{{$lottery->remain_lotteries}}</span> <br>
                           <p class="m-0">  Remaining</p>

                        </div>
                    </div>

                    @elseif($item->status == 1)

                    @php
                                    
                    $datetimestart = date('Y-m-d');
                   $to = \Carbon\Carbon::parse($lottery->claim_date_time);
                   $from = \Carbon\Carbon::parse($datetimestart);
                   $days = $to->diffInDays($from);
                @endphp

                @if ($lottery->claim_date_time <= $datetimestart)
                    
                <div class="row card-botom">
                    <div class="col col-md-12 col-sm-12 card-botom-day">
                        <span>Claim Lottery</span>
                    </div>
                    
                </div>

                @else

                  <!-- card Bottom  -->
                  <div class="row card-botom">
                    <div class="col col-md-4 col-sm-4 card-botom-day">
                        <span>{{$days}}D</span>
                    </div>
                    <div class="col col-md-8 col-sm-8 card-botom-timer "> 
                       <span>{{$lottery->remain_lotteries}}</span> <br>
                       <p class="m-0"> Remaining</p>

                    </div>
                </div>

                @endif

                @elseif($item->status == 2)

                <div class="row card-botom">
                    <div class="col col-md-12 col-sm-12 card-botom-day">
                        <span>Claimed</span>
                    </div>
                    
                </div>

                @elseif($item->status == 3)

                <div class="row card-botom">
                    <div class="col col-md-12 col-sm-12 card-botom-day">
                        <span>Not Approved</span>
                    </div>
                    
                </div>

                @endif

               

            </div>
        </div>
    </div>

        
    @endif
            
        @endforeach
            
        @endif
        
    


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
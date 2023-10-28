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
<link rel="stylesheet" href="assets/visitor/css/Lotterywinners.css">

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

<div class="container-fluid ">
  <div class="container card-container ">
      <h1> Lottery winners </h1>

      <div class="row">

        @if (!empty($winners))
        @foreach ($winners as $item)

        
        <div class="col-sm-4 col-md-4 ">
            <div class="card Loutery-card" style="background-color:#3a0405;">
               <div class="card-img-head d-flex justify-content-center">
                   <img src="assets/winner/img/{{$item->image}}" class="card-img-top img-fluid" alt="...">

               </div>
               <div class="card-body card-details-loutery" style="background-color: #90090D;">
                   <div class="card-loutery text-center  align-items-center">

                      <p class="card-lottery-contest">Contest No:</p>
                      <span B2T class="card-lottery-b2t">{{$item->code}}</span>
                  

                   </div>
                   <div class="card-detail ">
                       <div class="row card-mar">
                           <div class="col col-md-6 col-sm-6 card-left">
                               <b class="text-light">{{$item->winner_name}}</b> 
                           </div>
                           <div class="col col-md-6 col-sm-6 card-right">
                               <b class="text-light">Lottery Value</b>
                               <span> ${{$item->price}}</span>
                           
                           </div>
                       </div>


                       <div class="row">
                           <div class="col col-md-6 col-sm-6 card-left">
                               <b class="text-light">Lottery Nmb.</b> <br>
                               <span>{{$item->number}}</span>
                           </div>
                           <div class="col col-md-6 col-sm-6  card-rightr">
                               <b class="text-light ">Address</b> 
                               <span>{{$item->address}} </span>
                           </div>
                       </div>
                   </div>
                   <!-- <hr style="color:lightgray">

                  
                
                   <div class="card-bottom-button">
                       <button type="button" class="btn btn-primary">Get Loutery</button>
                   </div> 
                 -->
               </div>
           </div>
         </div>


            
        @endforeach
            
        @endif



        {{-- <div class="col-sm-4 col-md-4">
          <a href="">  <div class="card Loutery-card" style="background-color:#3a0405;">
              <div class="card-img-head d-flex justify-content-center">
                  <img src="assets/visitor/img/car.png" class="card-img-top img-fluid" alt="...">

              </div>
              <div class="card-body card-details-loutery" style="background-color: #90090D;">
                  <div class="card-loutery text-center  align-items-center">

                     <p class="card-lottery-contest">Contest No:</p>
                     <span B2T class="card-lottery-b2t">B2T</span>
                 

                  </div>
                  <div class="card-detail ">
                      <div class="row card-mar">
                          <div class="col col-md-6 col-sm-6 card-left">
                              <b class="text-light">Tabraiz <br>
                                  Ahmed</b> 
                          </div>
                          <div class="col col-md-6 col-sm-6 card-right">
                              <b class="text-light">Lottery Value</b>
                              <span> $200</span>
                          
                          </div>
                      </div>


                      <div class="row">
                          <div class="col col-md-6 col-sm-6 card-left">
                              <b class="text-light">Lottery Nmb.</b> <br>
                              <span>0b76c12</span>
                          </div>
                          <div class="col col-md-6 col-sm-6  card-rightr">
                              <b class="text-light ">Address</b> 
                              <span>Random#123 </span>
                          </div>
                      </div>
                  </div>
                  <!-- <hr style="color:lightgray">

                 
               
                  <div class="card-bottom-button">
                      <button type="button" class="btn btn-primary">Get Loutery</button>
                  </div> 
                -->
              </div>
          </div></a>
        </div> --}}
       

      

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

<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr class="line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 Copyright-lottery">
                <p>Copyright © 2023.All Rights Reserved By </p>
                
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 social-media">
                <!-- <img src="img/fb.png" alt="">
                <img src="img/insta.png" alt="">
                <img src="img/wa.png" alt="" class="whatsapp-padding"> -->
                @php 
                $company_details = \App\Models\CompanyDetail::first();
            @endphp
           <a target="__" href="@if(!empty($company_details)){{$company_details->facebook}}@endif"><img src="assets/visitor/img/fb.png" alt=""></a>
               <a target="__" href="@if(!empty($company_details)){{$company_details->instagram}}@endif"> <img src="assets/visitor/img/insta.png" alt=""></a>
                <a target="__" href="https://wa.me/@if(!empty($company_details)){{$company_details->whatsapp}}@endif?text=I Want Buy Lottery, Please give me details. How I Buy!" ><img src="assets/visitor/img/wa.png" alt="" class="whatsapp-padding"></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid header ">
    <div class="container inner-header ">
        <div class="row">
            <div class="col-9 col-sm-8 col-md-6 customer-support  ">
               <a href="/contact-us" class=" link"> Customer Support</a>
               <!-- <div class="dropdown arrow">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Eng
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Urd</a></li>
                  
                </ul>
              </div> -->




            </div>
<div class="col-3 col-sm-4 col-md-6 customer-support ">

            
    <div class="dropdown float-end">
        <button class="btn dropdown-profile-button " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
         <img src="assets/partner/img/profile.png" alt="">
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item drop-profile" ><img src="/assets/partner/img/{{Auth::user()->profile}}" style="width: 25px; height: 25px; border-radius: 100%;" alt=""> {{Auth::user()->name}}</a></li>
          <li><a class="dropdown-item " href="/update-profile"><img src="assets/partner/img/pro-pic.png" alt=""> Update Profile</a></li>
          <li><a class="dropdown-item " href="/update-password"><img src="assets/partner/img/pro-pic.png" alt=""> Update Password</a></li>
          <li><a class="dropdown-item " href="/commission"><img src="assets/partner/img/heart.png" alt="">Commission Page</a></li>
          <li><a class="dropdown-item " href="/logout"><img src="assets/partner/img/logout.png" alt=""> log Out</a></li>
        </ul>
      </div>



      <!-- new  -->

      <!-- <div class="dropdown float-end">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div> -->
</div>

<hr style="color: #A49BE4; height: 1px; margin: 0px; ">
        </div>
        <!-- navbar -->
        <div class="row">
            <div class="col-md-12 navbarr">

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid p-0">
                      @php
                      $company_details = \App\Models\CompanyDetail::first();
                  @endphp
                  @if (!empty($company_details))
                      
                  <a class="navbar-brand " href="/partner"><img src="assets/company/img/{{$company_details->logo}}" alt=""  style="width: 100px;"></></a>
                  @endif
                      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/partner">HOME</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/find-lottery">FIND LOTTERY</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/total-members">TOTAL MEMBERS</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link" href="/contact-us">CONTACT US</a>
                          </li>
                          
                         
                        </ul>
                        <a href="/buy-lottery" class="btn  tag-buy"><img src="assets/partner/img/tag.png.png" alt="">  BUY LOTTERY</a>
                        
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
     </div>

</div>
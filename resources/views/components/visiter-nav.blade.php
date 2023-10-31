<div class="container-fluid header ">
    <div class="container inner-header ">
        <div class="row">
            <div class="col-md-12  customer-support  ">
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
                      
                  <a class="navbar-brand " href="/"><img src="assets/company/img/{{$company_details->logo}}" alt=""></a>
                  @endif
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/">HOME</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/winners">WINNER</a>
                          </li>
                          @if (Auth::user())
                          <li class="nav-item">
                            <a class="nav-link" href="/our-lottery">LOTTERY</a>
                          </li>
                          @endif
                        
                          <li class="nav-item">
                            <a class="nav-link" href="/contact-us">CONTACT US</a>
                          </li>

                          
                          
                         
                        </ul>

                        
                        
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
     </div>

</div>
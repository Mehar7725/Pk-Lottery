<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!--boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--boostrap css -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="assets/partner/css/commision.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- custom css -->

  <title>Commission Page</title>
</head>

<body>
  <!-- header start -->
      <!-- header start -->
      <x-partner-nav/>
      <!-- header-end -->
  <!-- header-end -->

  <!-- cover start-->
  <div class="container-fluid cover">
    <div class="container mr-marggin">
      <div class="row cover-heading-pading">
        <div class="col-md-7 heading-find input-number">
          <h1>Commission Page</h1>
          <p class="lottery-cnic">You can collect your suspected or problem clients in the WFraud® blacklist database
            and prevent them from making purchases on demand. Optionally, you can also use the WFraud® common database.
            This allows you to receive alerts and block purchases when client data, which all WISECP users mark as
            malicious, is detected on your system.
          </p>
        </div>
        <div class="col-md-5 bg-grident" style="overflow: hidden;">
          <div class="card-cover-bg">
            @if (!empty($company_detail))
                    
            <img src="assets/company/img/{{$company_detail->add}}" alt="">
            @endif
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- cover end  -->

  <!-- footer start-->
  <div class="container-fluid footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-0">
          <div class="table-responsive">
            <table class="table table-bordered bg-white mt-5">
              <thead>
                <tr>
                  <th scope="col">Serial No.</th>
                  <th scope="col">Description</th>
                  <th scope="col">Lottery No.</th>
                  <th scope="col">Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">01</th>
                  <td>abcdefghijklah dcjxdcsd cxvxvs</td>
                  <td>973465</td>
                  <td>42%</td>
                </tr>
                <tr>
                  <th scope="row">02</th>
                  <td>abcdefghijklah dcjxdcsd cxvxvs</td>
                  <td>973465</td>
                  <td>42%</td>
                </tr>
                <tr>
                  <th scope="row">03</th>
                  <td>abcdefghijklah dcjxdcsd cxvxvs</td>
                  <td>973465</td>
                  <td>42%</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered bg-white mt-5">
              <thead>
                <tr>
                  <th scope="col"># SR</th>
                  <th scope="col">Account Name</th>
                  <th scope="col">Account Number</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($accounts))
                @php  $i = 1 ; @endphp
              @foreach ($accounts as $item)

              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$item->account_name}} ({{$item->holder_name}})</td>
                <td>{{$item->account_number}}</td>
              </tr>
                  
              @php  $i++; @endphp
              @endforeach
                  
              @endif
            
          
              </tbody>
            </table>
          </div>



          <div class="table-responsive bg-white p-3 mt-4">
            <div class="datatable-heading">
              <h1>
                Commission Table
              </h1>
              <p>
                You can collect your suspected or problem clients in the WFraud® blacklist database and prevent them
                from
                making purchases on demand. Optionally, you can also use the WFraud® common database. This allows you to
                receive alerts and block purchases when client data, which all WISECP users mark as malicious, is
                detected
                on your system.
              </p>
            </div>
            <table id="example" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>Lottery No</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Commission</th>
                  <th>Percentage</th>
                  <th>Status</th>
                  <th>Referral Code</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>421</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>422</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>423</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>424</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>425</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>426</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>427</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>428</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>429</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>1200$</td>
                  <td>Edinburgh...</td>
                  <td>200$</td>
                  <td>12%</td>
                  <td>ABCDEF...</td>
                  <td>Alpha-12333</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Lottery No</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Commission</th>
                  <th>Percentage</th>
                  <th>Status</th>
                  <th>Referral Code</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 p-0">
          <hr class="border-white mt-5 mb-3">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="Copyright-lottery">Copyright © 2023.All Rights Reserved By </p>
        </div>
        <div class="col-md-6">
          <div class="loutery-icon">
            <img src="assets/partner/img/fb.png" class="p-3" alt="">
            <img src="assets/partner/img/wa.png" class="p-3" alt="">
            <img src="assets/partner/img/insta.png" class="p-3" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script>
    new DataTable('#example');
  </script>
</body>

</html>
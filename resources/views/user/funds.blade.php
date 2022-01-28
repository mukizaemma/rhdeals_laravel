<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Rwanda Hot Deals</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('user.layouts.header')
5
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    {{-- @include('user.layouts.slideshow') --}}
    <!-- Banner Ends Here -->
    <section class="breadcrumb-bg mt-10" style="background-image: url(assets/images/cars.jpg);">
        <div class="container">
          <div class="breadcrumb-holder">
            <div>
              <h1 class="breadcrumb-title">Cars for Rent & Sale</h1>
              <ul class="breadcrumb breadcrumb-transparent">
                <li class="breadcrumb-item">
                  <a class="text-white" href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item text-white active" aria-current="page">
                  Contact Us
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    <div class="container mt-25">
        <h2>Special Funds and Grants</h2>
        <p class="mb-25">Don't Hesitate to call the house owner if you would like to</p>

        <table class="table table-striped">

          <thead>
            <tr>
              <th>#</th>
              <th>Logo</th>
              <th>Instutition</th>
              <th>Funds Title</th>
              <th>Funds Conditions</th>
              <th>Deadline</th>
              <th>Contact</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0 ?>
            @foreach ($data as $inst)
            <?php $i++ ?>
            <tr>
              <td>{{ $i }}</td>
              <td><img class="card-img-top lazyestload" src="{{ asset('storage/images/funds/'.$inst->image) }}"
                alt="{{ $inst->title }}" style="width: 200px;"></td>
              <td>{{ $inst->institution }}</td>
              <td>{{ $inst->title }}</td>
              <td>{{ $inst->details }}</td>
              {{-- <td>{{ $inst->type }}</td> --}}
              <td>{{ $inst->deadline }}</td>
              <td>{{ $inst->contact }}</td>

            </tr>
            @endforeach
          </tbody>

        </table>
        <span>{{ $data->links() }}</span>
      </div>



@include('user.layouts.footer');


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>

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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @include('user.layouts.slideshow')
    <!-- Banner Ends Here -->

    <div class="container mt-25">
        <h2>List of Recent Published Bars & Restaurants</h2>
        {{-- <p class="mb-25">Don't Hesitate to call the house owner if you would like to</p> --}}

        <table class="table table-striped">

          <thead>
            <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Bar/Resto Name</th>
                <th>Location</th>
                <th style="width: 50px;"!important>Services Description</th>
                <th >Pone</th>
                <th >Email</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $bar)
              <tr>
                <td>{{ $bar->id }}</td>
                <td><img src="{{ asset('storage/images/barsResto/').$bar->image }}" alt="" style="width: 100px;"></td>
                <td>{{ $bar->name }}</td>
                <td>{{ $bar->location }}</td>
                <td style="width: 300px;">{{ $bar->details }}</td>
                <td>{{ $bar->phone }}</td>
                <td>{{ $bar->email }}</td>

            </tr>
            @endforeach
          </tbody>

        </table>

      </div>



      @include('user.layouts.footer')



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

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


    {{-- <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About RWanda Hot Deals</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p class="font-size-20">We are dedicated to providing the best services
                through helping you sell or buy the best properties at the affordable prices. We also help detecting and promoting talents</p>
               <ul class="featured-list">
                <li><a href="#">Real Estate</a></li>
                <li><a href="#">Teners</a></li>
                <li><a href="#">Auctions</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Business Linkage</a></li>
                <li><a href="#">Hotels  & Restaurants</a></li>

              <a href="#" class="filled-button">More</a>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- @include('user.layouts.categories') --}}
    <section class="py-8 py-md-10">
        <div class="container">
            <div class="section-title justify-content-center mb-4 mb-md-8">
                <span class="shape shape-left bg-info"></span>
                <h2 class="text-blue mt-10">Our Services</h2>
                <span class="shape shape-right bg-info"></span>
              </div>
          <div class="row">
              @foreach($categories as $cat)

            <div class="col-sm-4 col-lg-3 col-xs-12">
              <div class="card">
                <a href="{{ $cat->link }}" class="position-relative">
                  <img class="card-img-top" src="{{ asset('storage/images/categories/').$cat->image }}" alt="Card image" style="width: 255px; height: 220px;">
                </a>
                <div class="card-body border-top-5 px-3 rounded-bottom border-primary">
                  <h3 class="card-title">
                    <a class="text-primary text-capitalize d-block text-truncate" href="{{ $cat->link }}">{{ $cat->title }}</a>
                  </h3>

                  <p>  </p>
                  <div class="d-block">

                    {{-- <a href="#" class="btn btn-link text-hover-primary ps-2 ps-lg-0">
                      <i class="fa fa-angle-double-right me-1" aria-hidden="true"></i> View More
                    </a> --}}
                  </div>
                </div>
              </div>
            </div>

            @endforeach

       </div>


          </div>
        </div>

      </section>



    @include('user.layouts.contacts')


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

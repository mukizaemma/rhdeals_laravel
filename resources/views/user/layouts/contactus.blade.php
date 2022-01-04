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

    <section class="py-8 py-md-10" style="margin-top: 10px;">
        <div class="container">
          <div class="mb-9">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <div class="media flex-md-column flex-lg-row mb-4">
                  <div class="icon-rounded-circle-large shadow-sm mb-md-2 me-md-0 me-2 me-lg-2 bg-primary">
                    <i class="fas fa-map-marker-alt text-white" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading text-primary font-weight-bold mb-3">Address:</h3>
                    <p class="text-muted font-weight-medium">Kigali Rwanda.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-xs-12">
                <div class="media flex-md-column flex-lg-row mb-6">
                  <div class="icon-rounded-circle-large shadow-sm me-2 mb-md-2 me-md-0 me-lg-2 bg-success">
                    <i class="fas fa-phone-alt text-white" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading text-success mt-0 font-weight-bold mb-3">Phone:</h3>
                    <a class="text-muted font-weight-medium" href="tel:+250788307454">
                      +250788307454
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-xs-12">
                <div class="media flex-md-column flex-lg-row mb-3 mb-md-0">
                  <div class="icon-rounded-circle-large shadow-sm me-2 mb-md-2 me-md-0 me-lg-2 bg-danger">
                    <i class="far fa-envelope text-white" aria-hidden="true"></i>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading text-danger">Email:</h3>
                    <p class="font-weight-medium">
                      <a class="text-muted" href="mailto:info@rwandahotdeals.com">info@rwandahotdeals.com</a>  Or
                      <a class="text-muted" href="mailto:victor@rwandahotdeals.com">victor@rwandahotdeals.com</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @if(session()->has('success'))
          <div class="alert alert-success">
              <button type="submit" class="close" data-dismiss="alert">X</button>
              {{ session()->get('success') }}
          </div>
          @endif

          <form action="{{url('/contactus')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h2 class="text-danger px-0 mb-0 mt-5">Send us a direct message</h2>
                <div class="row">
                    <div class="col-md-6 form-group-icon">
                        <i class="fas fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control border-primary" name="fname" placeholder="First name" required>
                    </div>
                    <div class="col-md-6 form-group-icon">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control border-success" name="email" placeholder="Email address"
                               required>
                    </div>
                </div>
                <div class="form-group form-group-icon">
                    <i class="fas fa-comments" aria-hidden="true"></i>
                    <textarea class="form-control border-info" name="message" placeholder="Your message" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-danger float-right text-uppercase">
                    Send Message
                </button>
            </form>
        </div>
      </section>

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

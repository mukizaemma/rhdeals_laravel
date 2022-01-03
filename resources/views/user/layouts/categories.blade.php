<section class="py-8 py-md-10">
    <div class="container">
        <div class="section-title justify-content-center mb-4 mb-md-8">
            <span class="shape shape-left bg-info"></span>
            <h2 class="text-blue mt-10">Our Services</h2>
            <span class="shape shape-right bg-info"></span>
          </div>
      <div class="row">
          @foreach ($cat as $cat )

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

<section class="bg-light py-7 py-md-10">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-sm-6 col-xs-12">
                <div class="section-title align-items-baseline mb-4">
                    <h2 class="text-danger px-0 mb-0 mt-5">Our Address</h2>
                </div>
                <p class="text-dark font-size-15">Kigali - Rwanda</p>
                <ul class="list-unstyled">
                    <li class="media align-items-center mb-3">
                        <div class="icon-rounded-circle-small bg-primary me-2">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mb-0"> </p>
                        </div>
                    </li>
                    <li class="media align-items-center mb-3">
                        <div class="icon-rounded-circle-small bg-success me-2">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mb-0"><a class="text-color"
                                               href="mailto:hello@example.com">info@rwandahotdeals.com</a></p>
                        </div>
                    </li>
                    <li class="media align-items-center mb-3">
                        <div class="icon-rounded-circle-small bg-info me-2">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mb-0"><a class="text-color" href="tel:[250] 788 591 946">+250788307454</a></p>
                        </div>
                    </li>
                </ul>
            </div>

            @if(session()->has('success'))
            <div class="alert alert-success">
                <button type="submit" class="close" data-dismiss="alert">X</button>
                {{ session()->get('success') }}
            </div>
            @endif
            <div class="col-sm-6 col-xs-12">
                <form action="{{url('/sendMessage')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <h2 class="text-danger px-0 mb-0 mt-5">Send us a direct message</h2>
                    <div class="form-group form-group-icon">
                        <i class="fas fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control border-primary" name="fname" placeholder="First name" required>
                    </div>
                    <div class="form-group form-group-icon">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control border-success" name="email" placeholder="Email address"
                               required>
                    </div>
                    <div class="form-group form-group-icon">
                        <i class="fas fa-comments" aria-hidden="true"></i>
                        <textarea class="form-control border-info" name="message" placeholder="Write message" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger float-right text-uppercase">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer-bg-img">
    <!-- Footer Color Bar -->
    <div class="color-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col color-bar bg-warning"></div>
                <div class="col color-bar bg-danger"></div>
                <div class="col color-bar bg-success"></div>
                <div class="col color-bar bg-info"></div>
                <div class="col color-bar bg-purple"></div>
                <div class="col color-bar bg-pink"></div>
                <div class="col color-bar bg-warning d-none d-md-block"></div>
                <div class="col color-bar bg-danger d-none d-md-block"></div>
                <div class="col color-bar bg-success d-none d-md-block"></div>
                <div class="col color-bar bg-info d-none d-md-block"></div>
                <div class="col color-bar bg-purple d-none d-md-block"></div>
                <div class="col color-bar bg-pink d-none d-md-block"></div>
            </div>
        </div>
    </div>

    {{-- <div class="pt-8 pb-7  bg-repeat" style="background-image: url(assets/img/background/footer-bg-imgd-1.png);"> --}}
    <div class="pt-8 pb-7  bg-repeat" style="background-color: #076B29;">
        <div class="container">
            <div class="row">


                    <div class="col-sm-6 col-lg-4 col-xs-12">
                        <h3 class="section-title-sm font-weight-bold text-white mb-3 mt-5"> Rwanda Hot Deals
                        </h3>

                    <p class="mb-6 text-white">We are dedicated to providing the best services through helping you sell
                        or buy the best properties at the affordable prices. We also help detecting and promoting talents.</p>
                    </div>
                <div class="col-sm-6 col-lg-4 col-xs-12">
                    <h4 class="section-title-sm font-weight-bold text-white mb-3 mt-5">Useful Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-white">
                                <i class="fas fa-angle-double-right me-2 text-white" aria-hidden="true"></i>About us
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/tenders') }}" class="text-white">
                                <i class="fas fa-angle-double-right me-2 text-white" aria-hidden="true"></i>Tenders
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/housses') }}" class="text-white">
                                <i class="fas fa-angle-double-right me-2 text-white" aria-hidden="true"></i>Houses for Rent & Sale
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/cars') }}" class="text-white">
                                <i class="fas fa-angle-double-right me-2 text-white" aria-hidden="true"></i>Cars for Rent & Sale
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/jobs') }}" class="text-white">
                                <i class="fas fa-angle-double-right me-2 text-white" aria-hidden="true"></i>Career
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-sm-6 col-lg-3 col-xs-12">
                    <h4 class="section-title-sm font-weight-bold text-white mb-3 mt-5">Mailing List</h4>
                    <p class="mb-4 text-white">Sign up for our mailing list to get latest updates and offers.</p>
                    <form class="mb-4" action="">
                        <div class="input-group shadow-light rounded-sm input-addon">
                            <input type="text" class="form-control" placeholder="Email address"
                                   aria-describedby="basic-addon21" required>
                            <button type="submit" class="btn input-group-text bg-danger">
                                <i class="fas fa-check text-white" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy Right -->
    <div class="copyright" style="background-color: #215033;">
        <div class="container">
            <div class="row py-4 align-items-center" >
                <div class="col-sm-7 col-xs-12 order-1 order-md-0">
                    <p class="copyright-text text-white"> © <span id="copy-year"></span> Rwanda Hot Deals
                     | Delivered by <a href="http://ezeetechs.com" target="_blank">Ezee Technologies Ltd.</a></p>
                </div>

                <div class="col-sm-5 col-xs-12">
                    <ul class="list-inline d-flex align-items-center justify-content-md-end justify-content-center mb-md-0">
                        <li class="me-3">
                            <a class="icon-rounded-circle-small bg-primary" href="javascript:void(0)">
                                <i class="fab fa-facebook-f text-white" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="icon-rounded-circle-small bg-success" href="javascript:void(0)">
                                <i class="fab fa-twitter text-white" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="icon-rounded-circle-small bg-danger" href="javascript:void(0)">
                                <i class="fab fa-google-plus-g text-white" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="icon-rounded-circle-small bg-info" href="javascript:void(0)">
                                <i class="fab fa-pinterest-p text-white" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="">
                            <a class="icon-rounded-circle-small bg-purple" href="javascript:void(0)">
                                <i class="fab fa-vimeo-v text-white" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

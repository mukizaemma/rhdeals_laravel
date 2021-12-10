<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><h2>Rwanda <em>Hot Deals</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ url('Houses') }}">Houses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('Plots') }}">Plots</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Tenders') }}">Tenders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Cars') }}">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Auctions') }}">Auctions</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="stores"
                   role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <i class="fas fa-photo-video nav-icon" aria-hidden="true"></i> --}}
                    <span>Career</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="stores">

                    <li>
                        <a class=" nav-link dropdown-item " href="">Jobs</a>
                    </li>
                    <li>
                        <a class=" nav-link dropdown-item " href="#">Talents</a>
                        <a class=" nav-link dropdown-item " href="#">Business Linkage</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle "  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <i class="fas fa-photo-video nav-icon" aria-hidden="true"></i> --}}
                    <span>Accommodation</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="stores">

                    <li class="bg-primary">
                        <a class="dropdown-item " href="">Hotels</a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="#">Bars & Restaurants</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Contactus') }}">Contacts</a>
            </li>

            <li  class="nav-item">
            @if (Route::has('login'))
                @auth
                      <x-app-layout>

                      </x-app-layout>

                @else
                    <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
{{--
                    @if (Route::has('register'))
                       <li ><a href="{{ route('register') }}" class="nav-link ">Register</a></li>
                    @endif --}}
                @endauth

             @endif
      </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

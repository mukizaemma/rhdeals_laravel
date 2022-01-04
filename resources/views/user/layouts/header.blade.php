<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}"><h2>Rwanda <em>Hot Deals</em></h2></a> --}}
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
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Hotels') }}">Hotels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Jobs') }}">Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Talents') }}">Talents <br> Detection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('Business') }}">Looking for a Business Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('BarsResto') }}">Bars & Restaurants</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('Others') }}">Other Deals</a>
              </li>


            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Contactus') }}">Contacts</a>
            </li>

            {{-- <li  class="nav-item">
            @if (Route::has('login'))
                @auth
                      <x-app-layout>

                      </x-app-layout>

                @else
                    <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>

                    @if (Route::has('register'))
                       <li ><a href="{{ route('register') }}" class="nav-link ">Register</a></li>
                    @endif
                @endauth

             @endif
      </li> --}}
          </ul>
        </div>
      </div>
    </nav>
  </header>

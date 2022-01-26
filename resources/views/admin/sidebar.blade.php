<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('Categories') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
    {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ url('category') }}">Add New</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ url('/Categories') }}">View All</a></li>
                </ul>
            </div>
        </li> --}}
{{--
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Tenders</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ url('tenders') }}">Add New</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ url('/tendersView') }}">View All</a></li>

                </ul>
            </div>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Houses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ url('houses') }}">Add New</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('HousesView') }}">View All</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Plots</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('plots') }}">Add New Plot</a>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('plotsView') }}">View All</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false"
                aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Funds</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('funds') }}">Add New Fund</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('fundsView') }}">All Funds</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false"
                aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Careers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('jobs') }}">Advertised Jobs</a></li>
                    {{-- <li class="nav-item"> <a class="nav-link" href="{{ url('talents') }}">Talents</a></li> --}}
                    <li class="nav-item"> <a class="nav-link" href="{{ url('services') }}">Services Linkage</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('business') }}">Business Linkage</a></li>
                </ul>
            </div>
        </li>
{{--
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false"
                aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Hotels & Restaurants</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('hotels') }}">Hotels</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('barResto') }}">Bars & Restaurants</a></li>

                </ul>
            </div>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="{{ url('cars') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Cars</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('hotels') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Hotels</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('opportunity') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Opportunities In Districts </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('companies') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Useful Companies</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('others') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Other Deals</span>
            </a>
            {{-- <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('mails') }}">Messages from Contact Form</a></li>
                </ul>
            </div> --}}
        </li>


        <li class="nav-item">
            <a class="nav-link"  href="{{ url('mails') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Messages from Contact Form</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">About us</span>
            </a>
            {{-- <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('mails') }}">Messages from Contact Form</a></li>
                </ul>
            </div> --}}
        </li>

    </ul>
</nav>

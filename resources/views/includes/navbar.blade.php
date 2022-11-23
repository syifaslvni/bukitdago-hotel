  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">{{ config('app.name') }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <ul class="navbar-nav ml-auto">
            {{-- show language --}}
          <li class="nav-item dropdown pe-3">
             <a class="nav-link dropdown-toggle" id="language" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @switch(app()->getLocale())
                    @case('id')
                    <!-- lang:id -->
                    <i class="flag-icon flag-icon-id"></i>
                        @break
                    @case('en')
                    <!-- lang:en -->
                    <i class="flag-icon flag-icon-gb"></i>
                        @break
                    @default
                @endswitch
                {{ strtoupper(app()->getLocale()) }}
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language">
              <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'id']) }}">
                {{ trans('localization.id') }}
              </a>
              <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'en']) }}">
                {{ trans('localization.en') }}
              </a>
           </div>
          </li>
        </ul>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ config('app.name') }}</h6>
              <span>{{ Auth::user()->name }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
               {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  <!-- End Header -->

  {{-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
       <!-- show app name -->
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
       <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="language" href="#" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-globe"></i>
             <!-- lang:id -->
             <i class="flag-icon flag-icon-id"></i>
             <!-- lang:en -->
             <!-- <i class="flag-icon flag-icon-gb"></i> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language">
             <a class="dropdown-item" href="#">1st language</a>
             <a class="dropdown-item" href="#">2nd language</a>
             <a class="dropdown-item" href="#">etc...</a>
          </div>
       </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-user fa-fw"></i>
             <!-- show username -->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">Profile</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="login.html">Logout</a>
          </div>
       </li>
    </ul>
 </nav> --}}

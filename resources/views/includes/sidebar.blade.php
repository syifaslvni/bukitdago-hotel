  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ set_active('dashboard.index') }}" href="{{ route('dashboard.index') }}">
          <i class="bi bi-grid"></i>
          {{ trans('dashboard.link.dashboard') }}
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">{{ trans('dashboard.link.room') }}</li>

      <li class="nav-item">
        <a class="nav-link {{ set_active(['categories.index', 'categories.create']) }}" href="{{ route('categories.index') }}">
          <i class="bi bi-menu-button-wide"></i>
          {{ trans('dashboard.link.categories') }}
        </a>
      </li><!-- End Categories Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-faq.html">
            <i class="bi bi-tags"></i>
            {{ trans('dashboard.link.tags') }}
        </a>
      </li><!-- Fasility Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-faq.html">
            <i class="bi bi-house-door"></i>
            {{ trans('dashboard.link.room') }}
        </a>
      </li><!-- End Room Page Nav -->

      <li class="nav-heading">{{ trans('dashboard.link.pages') }}</li>

      <li class="nav-item">
        <a class="nav-link " href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-faq.html">
            <i class="bi bi-card-image"></i>
            {{ trans('dashboard.link.file_manager') }}
        </a>
      </li><!-- End File Manager Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>
  <!-- End Sidebar-->


  {{-- <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
       <div class="nav">
          <a class="nav-link active" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
             </div>
             Dashboard
          </a>
          <div class="sb-sidenav-menu-heading">Master</div>

          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="far fa-newspaper"></i>
             </div>
             Posts
          </a>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-bookmark"></i>
             </div>
             Categories
          </a>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tags"></i>
             </div>
             Tags
          </a>
          <div class="sb-sidenav-menu-heading">User permission</div>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-user"></i>
             </div>
             User
          </a>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-user-shield"></i>
             </div>
             Role
          </a>
          <div class="sb-sidenav-menu-heading">Settings</div>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-photo-video"></i>
             </div>
             File manager
          </a>
       </div>
    </div>
    <div class="sb-sidenav-footer">
       <div class="small">Logged in as:</div>
       <!-- show username -->
    </div>
 </nav> --}}

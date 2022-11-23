<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    {{ config('app.name') }} | @yield('title')
  </title>

  @stack('before-style')
  @include('includes.style')
  @stack('after-style')

</head>

<body>
  <!-- ======= Header ======= -->
    @include('includes.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    @include('includes.sidebar')
  <!-- End Sidebar-->
  
  <main id="main" class="main">

    <div class="pagetitle">

      <h1>@yield('title')</h1>
      
      @yield('breadcrumbs')
      
    </div><!-- End Page Title -->

    <section class="section dashboard">
      @yield('content')
    </section>

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
        @include('includes.footer')nmasakajkdjsackjsacjaskojc
    <!-- End Footer -->
</body>

@stack('before-script')
@include('includes.script')
@stack('after-script')

</html>
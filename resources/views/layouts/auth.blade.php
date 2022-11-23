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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        
        @yield('content')

      </section>

    </div>
  </main><!-- End #main -->

</body>

@stack('before-script')
@include('includes.script')
@stack('after-script')

</html>
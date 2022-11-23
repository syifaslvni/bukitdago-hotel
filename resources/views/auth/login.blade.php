@extends('layouts.auth')

@section('title', 'LOGIN')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Bukit Dago Hotel</span>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-3 pb-2">
              <h5 class="card-title text-center pb-0 fs-3">LOGIN</h5>
              <p class="text-center small">Enter your email & password to login</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate="">
                @csrf

              <div class="col-12">
                <label for="email">Email</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">Please enter your email.</div>
                    </div>
              </div>

              <div class="col-12">
                <label for="password" class="control-label">{{ __('Password') }}</label>
                <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>

                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">Please enter your password!</div>
                  </div>
                </div>

              <div class="col-12">
            </div>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

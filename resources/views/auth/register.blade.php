@extends('layout.template')
@section('content')
<script src="assets/static/js/initTheme.js"></script>
<div id="auth">
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="index.html"
            ><img src="./assets/compiled/svg/logo.svg" alt="Logo"
          /></a>
        </div>
        <h1 class="auth-title">Sign Up</h1>
        <p class="auth-subtitle mb-5">
          Input your data to register to our website.
        </p>

        <form action="{{ url('register') }}" method="POST">
          @csrf
          <div class="form-group position-relative has-icon-left mb-4">
            <input
            name="nm_admin"
              type="text"
              class="form-control form-control-xl @error('nm_admin') 
              is-invalid  
              @enderror"
              placeholder="Nama" value="{{ old('nm_admin') }}"
            />
            <div class="form-control-icon">
              <i class="bi bi-envelope"></i>
            </div>
            @error('nm_admin')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input
            name="username"
              type="text"
              class="form-control form-control-xl @error('username')
                is-invalid
              @enderror"
              placeholder="Username" value="{{ old('username') }}"
            />
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input
            name="password"
              type="password"
              class="form-control form-control-xl @error('password')
                is-invalid
              @enderror"
              placeholder="Password"
            />
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Sign Up
          </button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">
            Already have an account?
            <a href="{{ url('login') }}" class="font-bold">Log in</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right"></div>
    </div>
  </div>
</div>
@endsection
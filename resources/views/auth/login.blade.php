@extends('layouts.simple')
<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="bg-body-dark">
        <div class="row mx-0 justify-content-center">
          <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
              <!-- Header -->
              <div class="py-4 text-center">
                <a class="link-fx fw-bold" href="/">
                  <i class="fa fa-fire"></i>
                  <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
                </a>
                <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
                <h2 class="h5 fw-medium text-muted mb-0">It’s a great day today!</h2>
              </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="block block-themed block-rounded block-fx-shadow">
          <div class="block-header bg-gd-dusk">
            <h3 class="block-title">Please Sign In</h3>
          </div>
          <div class="block-content">
            <div class="form-floating mb-4">
              <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
              <x-input-error style="color: red" :messages="$errors->get('email')" class="mt-2" />
              <label class="form-label" for="login-username">Email</label>
            </div>
            <div class="form-floating mb-4">
              <input id="password" class="form-control"
              type="password"
              name="password"
              required autocomplete="current-password" />
              <label class="form-label" for="login-password">Password</label>
              <x-input-error style="color: red" :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="row">
              <div class="col-sm-6 d-sm-flex align-items-center push">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="login-remember-me"
                    name="remember">
                  <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                </div>
              </div>
              <div class="col-sm-6 text-sm-end push">
                <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                        {{ __('Log in') }}
                </button>
              </div>
            </div>
          </div>
          <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
            <a href="/register" class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block">
              <i class="fa fa-plus opacity-50 me-1"></i>  {{ __('Register') }}
            </a>
            @if (Route::has('password.request'))
            <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('password.request') }}">
             {{ __('Forgot your password?') }}
            </a>
            @endif
          </div>
        </div>
      </form>
    </div>
@extends('layouts.simple')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="row mx-0 justify-content-center">
        <div class="hero-static col-lg-6 col-xl-4">
          <div class="content content-full overflow-hidden">
            <!-- Header -->
            <div class="py-4 text-center">
              <a class="link-fx fw-bold" href="index.php">
                <i class="fa fa-fire"></i>
                <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
              </a>
              <h1 class="h3 fw-bold mt-4 mb-2">Don’t worry, we’ve got your back</h1>
              <h2 class="h5 fw-medium text-muted mb-0">Please enter your username or email</h2>
            </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="block block-themed block-rounded block-fx-shadow">
            <div class="block-header bg-gd-primary">
              <h3 class="block-title">Password Reminder</h3>
            </div>
            <div class="block-content">
              <div class="form-floating mb-4">
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                <label class="form-label" for="reminder-credential">Email</label>
                <x-input-error style="color: red" :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="text-center mb-4">
                <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                  Reset Password
                </button>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light mb-4 text-center">
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="/login">
                <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
              </a>
            </div>
          </div>
        </form>
    </form>

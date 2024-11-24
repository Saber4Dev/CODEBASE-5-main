@extends('layouts.simple')

<div>
    <div class="bg-body-dark">
        <div class="row mx-0 justify-content-center">
            <div class="hero-static col-lg-6 col-xl-4">
                <div class="content content-full overflow-hidden">
                    <!-- Header -->
                    <div class="py-4 text-center">
                        <a class="link-fx fw-bold" href="index.php">
                            <i class="fa fa-fire"></i>
                            <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
                        </a>
                        <h1 class="h3 fw-bold mt-4 mb-2">Create New Account</h1>
                        <h2 class="h5 fw-medium text-muted mb-0">We’re excited to have you on board!</h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="block block-themed block-rounded block-fx-shadow">
                            <div class="block-header bg-gd-emerald">
                                <h3 class="block-title">Please add your details</h3>
                            </div>
                            <div class="block-content">
                                <div class="form-floating mb-4">
                                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <label class="form-label" for="signup-username">Name</label>
                                    <x-input-error style="color: red" :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <label class="form-label" for="signup-email">Email</label>
                                    <x-input-error style="color: red" :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                                    <label class="form-label" for="signup-password">Password</label>
                                    <x-input-error style="color: red" :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                    <label class="form-label" for="signup-password-confirm">Confirm Password</label>
                                    <x-input-error style="color: red" :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 d-sm-flex align-items-center push">
                                    </div>
                                    <div class="col-sm-6 text-sm-end push">
                                        <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full bg-body-light d-flex justify-content-between">
                                <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                    href="/login">
                                    <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="margin-top: 100px;">

                    <div class="text-center account-logo-box">
                        <div class="mt-2 mb-2">
                            <a href="index.html" class="text-success">
                                <span><img src="assets/images/logo.png" alt="" height="36"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" :value="old('email')"
                                    required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" id="username" name="username"
                                    :value="old('username')" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <div class="checkbox checkbox-success pt-1 pl-1">
                                    <input name="terms" id="terms" type="checkbox" required>
                                    <label for="terms" class="mb-0">I accept <a href="#">Terms and
                                            Conditions</a></label>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center mt-2">
                                <div class="col-12">
                                    <button class="btn width-md btn-bordered btn-danger waves-effect waves-light"
                                        type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                <x-jet-validation-errors />

                <div class="row mt-5">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Already have account?<a href="page-login.html"
                                class="text-primary ml-1"><b>Sign In</b></a></p>
                    </div>
                </div>

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>


@stop

@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="margin-top: 100px;">

                    <div class="text-center">
                        <div class="mt-2 mb-2">
                            <a href="/" class="text-success">
                                <span><img src="{{ asset('assets/images/Rating.Land.svg') }}" alt="" height="60"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="text-center mb-4">
                            <p class="text-muted mb-0">Enter your email address and we'll send you an email with
                                instructions to reset your password. </p>
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" name="email" :value="old('email')" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center mt-2 row">
                                <div class="col-12">
                                    <button class="btn width-md btn-bordered btn-dark waves-effect waves-light"
                                        type="submit">Send Email
                                    </button>
                                </div>
                            </div>
                        </form>
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
                <div class="row mt-5">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Already have account?<a href="/login" class="text-primary ml-1"><b>Sign
                                    In</b></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@stop

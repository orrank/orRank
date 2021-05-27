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

                        <form method="POST" action="/user:registration">
                            @csrf
                            @livewire('components.register-form')
                        </form>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('failed') }}
                    </div>
                @endif

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

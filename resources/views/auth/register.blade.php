@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="margin-top: 85px;">

                    <div class="text-center">
                        <div class="mt-2 mb-2">
                            <a href="/" class="text-success">
                                <span><img src="{{ asset('assets/images/OrRank_black.svg') }}" alt="" height="80"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
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

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @livewire('components.register-form')
                        </form>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
                {{-- <br>
                <hr>
                <center>
                    <button type="button" onclick="location.href = '/auth/redirect';"
                        class="btn btn-googleplus waves-effect waves-light">
                        <i class="fab fa-google mr-1"></i> Google
                    </button>
                    <button type="button" class="btn btn-facebook waves-effect waves-light">
                        <i class="fab fa-facebook-f mr-1"></i> Facebook
                    </button>
                    <button type="button" class="btn btn-twitter waves-effect waves-light">
                        <i class="fab fa-twitter mr-1"></i> Twitter
                    </button>
                    <button type="button" onclick="location.href = '/auth/redirect';"
                        class="btn btn-github waves-effect waves-light">
                        <i class="fab fa-github mr-1"></i> Github
                    </button>
                </center> --}}

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

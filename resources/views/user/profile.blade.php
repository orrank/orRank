@extends('layouts.dashboard')
@section('content')

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <div class="text-center card-box shadow-none border border-secoundary">
                                <div class="member-card">
                                    <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                        <img class="rounded-circle img-thumbnail"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->username }}">
                                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                    </div>

                                    <div class="">
                                        <h5 class="font-18 mb-1">{{ Auth::user()->firstname }}
                                            {{ Auth::user()->lastname }}</h5>
                                        <p class="text-muted mb-2">~{{ Auth::user()->username }}</p>
                                    </div>

                                    <button type="button"
                                        class="btn btn-dark btn-sm width-sm waves-effect mt-2 waves-light">Follow</button>

                                    <p class="sub-header mt-3">
                                        {{ Auth::user()->bio }}
                                    </p>

                                    <hr />

                                    <div class="text-left">

                                        <p class="text-muted font-13"><strong><i
                                                    class="mdi mdi-cellphone-iphone"></i></strong><span class="ml-4">
                                                {{ Auth::user()->mobile }}</span></p>

                                        <p class="text-muted font-13"><strong><i class="mdi mdi-email-outline"></i></strong>
                                            <span class="ml-4">
                                                {{ Auth::user()->email }}</span>
                                        </p>

                                        <p class="text-muted font-13"><strong><i
                                                    class="mdi mdi-map-marker-outline"></i></strong> <span class="ml-4">
                                                {{ Auth::user()->location }}</span></p>
                                    </div>

                                    <ul class="social-links list-inline mt-4">
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#"
                                                data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#"
                                                data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#"
                                                data-original-title="Instagram"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                            <!-- end card-box -->

                        </div>
                        <!-- end col -->

                        <div class="col-xl-9 col-md-8">
                            <div class="row">
                                <div class="col-xl-8">
                                    <h5 class="header-title">Recent Activities</h5>

                                    <div class=" pt-2">
                                        <h5 class="font-16 mb-1">Lead designer / Developer</h5>
                                        <p class="mb-0">websitename.com</p>
                                        <p><b>2010-2015</b></p>

                                        <p class="sub-header"></p>
                                    </div>

                                    <hr />

                                    <div class="">
                                        <h5 class="font-16 mb-1">Senior Graphic Designer</h5>
                                        <p class="mb-0">coderthemes.com</p>
                                        <p><b>2007-2009</b></p>

                                        <p class="sub-header"></p>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-4">
                                    <h5 class="header-title">Friends</h5>

                                    <div class="inbox-widget">
                                        <div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg"
                                                        class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">
                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg"
                                                        class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">
                                                    <button type="button" class="btn btn-xs btn-danger">Unfollow</button>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg"
                                                        class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">
                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg"
                                                        class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">
                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg"
                                                        class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Adhamdannaway</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">
                                                    <button type="button" class="btn btn-xs btn-success">Follow</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->

    </div>
    <!-- end container-fluid -->
@stop

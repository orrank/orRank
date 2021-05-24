@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box" style="margin-top: 70px;">
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="text-center card-box shadow-none border border-secoundary">
                            <div class="member-card">
                                <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail"
                                        alt="profile-image">
                                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                </div>

                                <div class="">
                                    <h5 class="font-18 mb-1">Mark A. McKnight</h5>
                                    <p class="text-muted mb-2">@webdesigner</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm width-sm waves-effect mt-2 waves-light">Message</button>

                                <p class="sub-header mt-3">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type.
                                </p>

                                <hr />

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ml-4">Johnathan
                                            Deo</span></p>

                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="ml-4">(123) 123
                                            1234</span></p>

                                    <p class="text-muted font-13"><strong>Email :</strong> <span
                                            class="ml-4">coderthemes@gmail.com</span></p>

                                    <p class="text-muted font-13"><strong>Location :</strong> <span class="ml-4">USA</span>
                                    </p>
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
                                            data-original-title="Skype"><i class="fab fa-skype"></i></a>
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
                                <h5 class="header-title">Experience</h5>

                                <div class=" pt-2">
                                    <h5 class="font-16 mb-1">Lead designer / Developer</h5>
                                    <p class="mb-0">websitename.com</p>
                                    <p><b>2010-2015</b></p>

                                    <p class="sub-header">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book.
                                    </p>
                                </div>

                                <hr />

                                <div class="">
                                    <h5 class="font-16 mb-1">Senior Graphic Designer</h5>
                                    <p class="mb-0">coderthemes.com</p>
                                    <p><b>2007-2009</b></p>

                                    <p class="sub-header">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book.
                                    </p>
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

                        <h5 class="header-title mt-2 mb-3">Recent Works</h5>

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class=" thumb">
                                    <a href="#" class="image-popup" title="Screenshot-1">
                                        <img src="assets/images/shots/shot-1.png" class="thumb-img" alt="work-thumbnail">
                                    </a>
                                    <div class="gal-detail">
                                        <h5 class="font-18">Travel Guide</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class=" thumb">
                                    <a href="#" title="Screenshot-2">
                                        <img src="assets/images/shots/shot-2.png" class="thumb-img" alt="work-thumbnail">
                                    </a>
                                    <div class="gal-detail">
                                        <h5 class="font-18">Interval timer (app concept)</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class=" thumb">
                                    <a href="#" class="image-popup" title="Screenshot-3">
                                        <img src="assets/images/shots/shot-3.png" class="thumb-img" alt="work-thumbnail">
                                    </a>
                                    <div class="gal-detail">
                                        <h5 class="font-18">Ecommerce app</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
            </div>
        </div>
    </div>


@stop

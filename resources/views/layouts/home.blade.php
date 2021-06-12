<!DOCTYPE html>
<html>

<head>

    @include('layouts.head')
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/home/css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/hexagons.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/main.css') }}" />
</head>

<body>
    <!-- ================ Start Header Area ================= -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/images/OrRank_white.svg') }}" height="50" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <!-- Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="elements.html">Elements</a>
                                <a class="dropdown-item" href="course-details.html">Course Details</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                Blog
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog-home.html">Blog Home</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
                            </div>
                        </li>
                        <li><a href="/login">Login</a></li>

                        <li>
                            <button class="search">
                                <span class="lnr lnr-magnifier" id="search"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="search-input" id="search-input-box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- ================ End Header Area ================= -->

    @yield('content')

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> <a target="_blank" href="https://gitleaf.com">GitLeaf</a>, Inc.
                </p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->

    <script src="{{ asset('assets/home/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js">
    </script>
    <script src="{{ asset('assets/home/js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('assets/home/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/home/js/hexagons.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/main.js') }}"></script>
</body>

</html>

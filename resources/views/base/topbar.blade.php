<!-- Topbar Start -->
<div class="navbar-custom">
    @if (Auth::user())
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell noti-icon"></i>
                    <span class="badge badge-success rounded-circle noti-icon-badge">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <div class="dropdown-item noti-title">
                        <h5 class="font-16 m-0">
                            <span class="float-right">
                                <a href="#" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success">
                                <i class="mdi mdi-settings-outline"></i>
                            </div>
                            <p class="notify-details">New settings
                                <small class="text-muted">There are new settings available</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-bell-outline"></i>
                            </div>
                            <p class="notify-details">Updates
                                <small class="text-muted">There are 2 new updates available</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user
                                <small class="text-muted">You have 10 unread messages</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        See all Notification
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>



            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    @if (Auth::user()->profile_image)
                        <img width="200" src="{{ asset('uploads/images/users/' . Auth::user()->profile_image) }}"
                            alt="{{ Auth::user()->username }}" class="rounded-circle">
                    @else
                        <img src="https://avatar.tobi.sh/tobiaslins.svg?text={{ substr(Auth::user()->firstname, 0, 1) }}{{ substr(Auth::user()->lastname, 0, 1) }}"
                            alt="{{ Auth::user()->username }}" class="rounded-circle">
                    @endif
                    <span class="d-none d-sm-inline-block ml-1"></span>


                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <a href="{{ '/' . Auth::user()->username . '/dashboard' }}">
                            <h6 class="text-overflow m-0"> <small>Signed in as</small><br>
                                ~{{ Auth::user()->username }}
                            </h6>
                        </a>
                    </div>

                    <!-- item-->
                    <a href="{{ '/' . Auth::user()->username . '/profile' }}" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-outline"></i>
                        <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-settings-outline"></i>
                        <span>Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    @if (Auth::user()->isDark == 0)
                        <a href="/dark-mode/enable" class="dropdown-item notify-item"
                            data-bsStyle="{{ asset('assets/css/bootstrap-dark.min.css') }}"
                            data-appStyle="{{ asset('assets/css/app-dark.min.css') }}">
                            <i class="mdi mdi-brightness-3"></i>
                            <span>Dark Mode</span>
                        </a>
                    @else
                        <a href="/dark-mode/disable" class="dropdown-item notify-item">
                            <i class="mdi mdi-brightness-5"></i>
                            <span>Light Mode</span>
                        </a>
                    @endif
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-lock-outline"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       this.closest('form').submit();" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>
                        <!-- Authentication -->
                    </form>

                </div>
            </li>
        </ul>
    @else
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li style="margin: 5px;">
                <a style="margin-top: 15px;" href="/register" class="btn btn-dark btn-rounded">
                    <small>Register</small>
                </a>
            </li>
            <li style="margin: 5px;">
                <a style="margin-top: 15px;" href="/login" class="btn btn-dark btn-rounded">
                    <small>Login</small>
                </a>
            </li>
        </ul>
    @endif

    <!-- LOGO -->
    <div class="logo-box">
        <a href="/" class="logo text-center">
            <span class="logo-lg">
                @if (Auth::user())
                    <span class="logo-lg-text-light">Ratin<span style="color: rgb(0, 255, 191);">Q</span></span>
                @else
                    <img src="{{ asset('assets/images/RatinQ_white.svg') }}" style="margin-top: 10px;" height="50">
                @endif
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark" style="color: white;"><i class="mdi mdi-star  mdi-36px"></i></span> -->
                @if (Auth::user())
                    <img src="{{ asset('assets/images/RatinQ_white.svg') }}" alt="logo" height="45" />
                @else
                    <img src="{{ asset('assets/images/RatinQ_white.svg') }}" style="margin-top: 10px;" alt="logo"
                        height="45" />
                @endif

            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        @if (Auth::user())
            <li>
                <button class="button-menu-mobile waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        @else
            <li>
                &nbsp;&nbsp;&nbsp;
            </li>
        @endif
        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="dropdown d-none d-lg-block">
            <a class="nav-link dropdown-toggle mr-0 waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <span class="align-middle">
                    <i class=" mdi mdi-plus-box-multiple-outline"></i>
                    <i class="mdi mdi-chevron-down"></i> </span>
            </a>
            <div class="dropdown-menu">
                <a href="/queue/new" class="dropdown-item notify-item">
                    <i class="mdi mdi-shield-star-outline"></i>
                    <span> New Rating Queue</span>
                </a>
                <a href="/organization/new" class="dropdown-item notify-item">
                    <i class="mdi mdi-shield-home-outline"></i>
                    <span> New Organization</span>
                </a>
            </div>
        </li>
    </ul>
</div>
<!-- end Topbar -->

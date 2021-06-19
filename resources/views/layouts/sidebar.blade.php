<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ '/' . Auth::user()->username . '/dashboard/' }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ '/' . Auth::user()->username . '/queues/' }}">
                        <i class="mdi mdi-invert-colors"></i>
                        {{-- <span class="badge badge-dark badge-pill float-right">2</span> --}}
                        <span> Rating Queues</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="waves-effect waves-light">
                        <i class="mdi mdi-layers"></i>
                        <span> Organizations </span>
                    </a>
                </li> --}}

                <li>
                    <a href="#" class="waves-effect waves-light">
                        <i class="mdi mdi-calendar"></i>
                        <span> Calendar </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect waves-light">
                        <i class="mdi mdi-settings-outline"></i>
                        <span> Settings </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

        <div class="help-box">
            <h5 class="text-muted mt-0">For Help ?</h5>
            <p class=""><span class="text-info">Email:</span>
                <a href="mailto:support@orrank.com" class="text-info">support@orrank.com</a>
            </p>
            <p class="mb-0 text-warning">
                <span class="text-info">OrRank</span> free for personal use. Please open this link if you
                like to <a href="">sponsor</a>.
            </p>
        </div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

<html>

<head>
    @include('layouts.head')
    @if (Auth::user())
        @if (Auth::user()->isDark == 0)
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        @else
            <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />
        @endif
    @else
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @endif
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/tooltipster/tooltipster.bundle.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('layouts.topbar')
    @yield('content')
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/libs/tooltipster/tooltipster.bundle.min.js') }}"></script>
    @foreach (['error', 'success', 'info', 'warning'] as $msg)
        @if (Session::has($msg))
            <script type="text/javascript">
                toastr.options = {
                    "closeButton": true,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.{{ $msg }}("{{ Session::get($msg) }}");

            </script>
        @endif
    @endforeach

    @livewireScripts

</body>

</html>

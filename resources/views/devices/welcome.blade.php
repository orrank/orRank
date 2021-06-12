<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .ico-48px {
            font-size: 148px;
        }
        body{
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="rowr">
            <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="text-center">
                        <div class="mt-5 mb-5">
                            <div id="score"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- rating js -->
    <script src="{{ asset('assets/libs/ratings/jquery.raty-fa.js') }}"></script>

    <!-- Init js -->
    <script src="{{ asset('assets/js/pages/rating.init.js') }}"></script>

</body>

</html>

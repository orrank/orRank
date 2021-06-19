<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>• {{ $queue->name }} • OrRank •</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
    <style>
        body {
            background-color: white;
        }

        span {
            cursor: pointer;
        }

        #score {
            font-size: 180px;
            text-align: center;
            color: rgb(241, 241, 240);
            -webkit-text-stroke: 1px rgb(251, 255, 0);
            display: inline;
        }

        .yellow {
            color: #fc0;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="rowr">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="text-center">
                    <div class="mt-5 mb-5">
                        @livewire('components.device-staring', ['queueId' => $queue->id])
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>

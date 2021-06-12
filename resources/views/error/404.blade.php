<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/images/OrRank_white.svg') }}" sizes="any" type="image/svg+xml">
    <title>• 404 • OrRank •</title>
    <style>
        * {
            transition: all 0.6s;
        }

        html {
            height: 100%;
        }

        body {
            font-family: 'Lato', sans-serif;
            color: #888;
            margin: 0;
        }

        #main {
            display: table;
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        .fof {
            display: table-cell;
            vertical-align: middle;
        }

        .fof h1 {
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
            animation: type .5s alternate infinite;
        }

        @keyframes type {
            from {
                box-shadow: inset -3px 0px 0px #888;
            }

            to {
                box-shadow: inset -3px 0px 0px transparent;
            }
        }

    </style>
</head>

<body>
    <div id="main">
        <div class="fof">
            <a href="/">
                <img height="100" src="{{ asset('assets/images/OrRank_black.svg') }}" />
            </a>
            <br><br>
            <h1>404</h1>
            <h2>This is not the webpage you are looking for.</h2>
            <br><br>
            <a style="text-decoration: none;" href="/"><h4>Return Home</h4></a>
        </div>
    </div>
</body>

</html>

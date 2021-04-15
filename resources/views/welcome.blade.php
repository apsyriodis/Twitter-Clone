<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tweety</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="icon" href="{{ asset('images/tweety_icon.png') }}"">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            a:visited {
            text-decoration: none;         
            }
            a:hover {
            text-decoration: none;
            }
            a:focus {
            text-decoration: none;
            }
            a:hover,
            a:active {
            text-decoration: none;
            }
            a {
            text-decoration: none;
            }

        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md" >
                    <b><a style="color: black;" href="{{ url('/') }}"><img src="/images/tweety_icon.png" alt="Tweety" width="110" height="100"> Tweety</a></b>
                </div>

                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endauth
                </div>
            </div>

        </div>
    </body>
</html>

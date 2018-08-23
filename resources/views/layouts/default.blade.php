<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Mobile Responsive-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MIHU 2.0 </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <!--Media JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>-->
    <script src="{{ asset('js/script.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet" type="text/css">
    
    <!--Media CSS-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" type="text/css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">-->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Media Style-->
    <link rel="stylesheet" href="{{  asset('css/styles.min.css') }}">

</head>
<body class="body_color">
    <div id="app" class="main_div">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="nav_color">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;">
                    May I Help You | Portal
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:white;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ ('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <style type="text/css">

        #card_gradient1{
            background: #8E2DE2;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #card_gradient2{
            background: #F3904F;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #3B4371, #F3904F);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #3B4371, #F3904F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #card_gradient3{
            background: #C04848;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #480048, #C04848);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #480048, #C04848); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #card_gradient4{
            background: #ee0979;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #card_gradient5{
            background: #ff00cc;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #333399, #ff00cc);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #333399, #ff00cc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #card_gradient6{
            background: #00C9FF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .body_color{
            background: #0f0c29;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        #nav_color{
            background: #FFB75E;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #ED8F03, #FFB75E);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #ED8F03, #FFB75E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            color:white;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 50px;
            color: white;
            padding: 20px;
            text-align: center;
            padding-bottom: 0px;
            background: #0f0c29;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

    </style>
    <center><img src="{{ asset('images/design.png') }}" alt="" width="80%" height="70%" style="opacity:.1" ></center>
    <div class="footer">
  <h6>Copyright 2018 Department of CSA.</h6>
</div>
</body>
</html>

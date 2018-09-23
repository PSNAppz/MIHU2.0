<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MIHU 2.0 </title>

    <!-- Scripts -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="body_color" style="color:white;">
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
                                    <a class="dropdown-item" href="/" style="color:black;">
                                        Home
                                    </a>
                                    <a class="dropdown-item" href="/admin" style="color:black;">
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:black;"
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
            background: #F7971E;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #FFD200, #F7971E);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #FFD200, #F7971E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
            background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #nav_color{
            background: #4a148c;  /* fallback for old browsers */
           
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            padding: 10px;
            margin-top: 2px;
            text-align: center;
            background: #4a148c;        }
    </style>

    <center><img src="{{ asset('images/design.png') }}" alt="" width="80%" height="70%" style="opacity:.1" ></center>

    <div class="footer">
  <h6>Copyright 2018 Department of CSA.</h6>
</div>
<script>
function changeVal(value){
    var a = parseInt(value);
    if(a == 1){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/accommodations/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/accommodations/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/accommodations/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/accommodations') }}";
    }
    if(a == 2){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/transport/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/transport/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/transport/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/transport') }}";
    }
    if(a == 3){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/darshan/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/darshan/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/darshan/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/darshan') }}";
    }
    if(a == 4){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/security/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/security/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/security/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/security') }}";
    }
    if(a == 5){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/specialevent/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/specialevent/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/specialevent/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/specialevent') }}";
    }
    if(a == 6){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/food/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/food/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/food/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/food') }}";
    }
    if(a == 7){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/coordinator/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/coordinator/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/coordinator/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/coordinator') }}";
    }
    if(a == 8){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/staff/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/staff/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/staff/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/staff') }}";
    }
    if(a == 9){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/seva/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/seva/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/seva/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/seva') }}";
    }
    if(a == 10){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/volunteer/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/volunteer/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/volunteer/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/volunteer') }}";
    }
}
</script>
</body>
</html>
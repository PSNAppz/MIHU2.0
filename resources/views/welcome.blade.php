@extends('layouts.default') @section('content')
<!-- IMAGE View
<div class="container " id="#body_color">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/backcover.jpg') }}" alt="First slide">
            </div>
        </div>
    </div>

    --> 
       

    <br> 
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="container">
         <center><h1 class="display-3">May I Help You</h1></center>
        <center>
        <!-- Row -->
        <div class="row">
            <div class="col-sm">
                <a href="/accommodation" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                        <div class="card-body">
                            <i style="font-size:40px;color:white;" class="fa fa-building icon"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Accommodation</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">View Accommodation details</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm">
                <a href="/darshan" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                 <i style="font-size:40px;color:white" class="fa fa-users icon"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Darshan</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">Darshan Timings</h6>
                            </div>
                    </div>
                </a>
            </div>

            <div class="col-sm">
                <a href="/food" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i style="font-size:40px;color:white;" class="fa fa-cutlery"></i>                                
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Food</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">Food Counters</h6>
                            </div>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-sm">
               <a href="/transportation" style="text-decoration: none;">
                    <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i class="fa fa-plane icon" style="font-size:40px;color:white"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Transportation</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">View transportation details</h6>
                            </div>
                    </div>
               </a>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <a href="/emergency" style="text-decoration: none;">
                        <div class="card-body">
                            <i class="fa fa-phone" style="font-size:40px;color:white"></i> 
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Emergency</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">Emergency contact details</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm">
               <a href="/coordinator" style="text-decoration: none;">
                    <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i class="fa fa-user-plus" style="font-size:40px;color:white"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Coordinators</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">Coordinators of Amritavarsham 65</h6>
                            </div>
                    </div>
               </a>
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col-sm">
                <a href="/volunteer" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i style="font-size:40px;color:white;" class="fa fa-users icon"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Volunteers</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">Volunteers for Seva</h6>
                            </div>
                    </div>
                </a>
            </div>

            <div class="col-sm">
               <a href="/map" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i class="fa fa-map-marker icon" style="font-size:40px;color:white"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Map</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">View Maps for the Program</h6>
                            </div>
                    </div>
               </a>
            </div>

            <div class="col-sm">
               <a href="/info" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i class="fa fa-info-circle" style="font-size:40px;color:white"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Info</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">Informations and Current News</h6>
                            </div>
                    </div>
               </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
               <a href="/volunteercare" style="text-decoration: none;">
                    <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                        <div class="card-body">
                            <i class="fa fa-user-circle" style="font-size:40px;color:white"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">VCC</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">VCC Informations</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <a href="/media" style="text-decoration: none;">
                        <div class="card-body">
                            <i class="fa fa-camera" style="font-size:40px;color:white"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Ashram</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">Brahmachari's and Brahmacharinis's Details</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <a href="/faq" style="text-decoration: none;">
                        <div class="card-body">
                            <i class="fa fa-question"  style="font-size:40px;color:white"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">FAQ</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">Frequently asked questions</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </center>
    </div>

@endsection

@extends('layouts.default')
@section('content')
    <br>
    <div class="container">
        <h1 class="display-4" style="color: white; text-align: center;">Emergency Contact</h1><br><br>
        <div class="row" style="color: black; border-color: black;">
            <div class="col-sm" >
                <a href="#" style="text-decoration: none;">
                    <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                            <div class="card-body">
                                <i class="fa fa-ambulance icon" style="font-size: 40px; color: white;"></i>
                                <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Medical</h5>
                                <h6 class="card-subtitle mb-2 text" style="color: white;">Contact Medical Emergencies</h6>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="#" style="text-decoration: none;">
                    <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                        <div class="card-body">
                            <i class="fa fa-fire-extinguisher icon" style="font-size: 40px; color: white;"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Fire and Safety</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">Contact Fire and Safety Emergencies</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="#" style="text-decoration: none;">
                    <div class="card" id="card_gradient2" style="width: 18rem;text-align: center;">
                        <div class="card-body">
                            <i class="fa fa-shield icon" style="font-size:40px;color:white"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Security</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">Contact Security Emergencies</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div> <br>
        <div class="row justify-content-center">
            <div class="col-sm">
                <a href="#" style="text-decoration: none;">
                    <div class="card" id="card_gradient3" style="width: 18rem;text-align: center;">
                        <div class="card-body">
                            <i class="fa fa-exclamation-triangle icon" style="font-size:40px;color:white"></i>
                            <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Code Red</h5>
                            <h6 class="card-subtitle mb-2 text" style="color: white;">Contact for Extreme emergencies</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

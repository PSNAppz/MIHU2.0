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
        <center>
        <!-- Row -->
        <div class="row">
            <div class="col-sm">
                <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Accommodation</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">View Accommodation details</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Darshan</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Darshan Timings</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Food</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Food Counters</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Events</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Special Events and Timings</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Transportation</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">View transportation details</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Volunteers</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Volunteers of Amritavarsham 65</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">VCC</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">View VCC Timings</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Emergency</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Emergency contact details</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient1" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">VIP Details</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">VIP details</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"/> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Security</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Security info</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">Media</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">News & Media</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" id="card_gradient4" style="width: 18rem;text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;color: white;font-family: 'Fugaz One', cursive;font-size: 25px">FAQ</h5>
                        <h6 class="card-subtitle mb-2 text" style="color: white;">Frequently asked questions</h6>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark active">
                                <input type="checkbox" checked autocomplete="off"/> Click Here
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    </div>

@endsection
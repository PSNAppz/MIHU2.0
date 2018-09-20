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
        <h1 class="display-1" style="color:white;">FAQs</h1>
            
        </center>
    </div>


@endsection
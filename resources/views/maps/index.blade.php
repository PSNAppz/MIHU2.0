@extends('layouts.default') @section('content')

	<div class="container">
		<nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-medical-tab" data-toggle="tab" href="#nav-map" role="tab" aria-controls="nav-map" aria-selected="true">Map</a>
         <a class="nav-item nav-link" id="nav-toi-tab" data-toggle="tab" href="#nav-toi" role="tab" aria-controls="nav-toi" aria-selected="false">Toilet Info</a>
        </div>
      <br>
      
   </nav>
   		<div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
         <center><img src="{{ asset('images/Map1.jpg') }}" alt=" Map1" width="100%" height="70%"></center>	
      </div>
      <div class="tab-pane fade show " id="nav-toi" role="tabpanel" aria-labelledby="nav-toi-tab">
         <center><img src="{{ asset('images/toi.png') }}" alt=" Map2" width="100%" height="70%"></center>	
      </div>
	</div>

@endsection
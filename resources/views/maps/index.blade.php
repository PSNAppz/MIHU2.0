@extends('layouts.default') @section('content')

	<div class="container">
		<nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-medical-tab" data-toggle="tab" href="#nav-map" role="tab" aria-controls="nav-map" aria-selected="true">Map</a>
      </div>
      <br>
      
   </nav>
   	<div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
         <center><img src="{{ asset('images/Map1.jpg') }}" alt=" Map1" width="100%" height="70%"></center>	
      </div>
      <div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
         <center><img src="{{ asset('images/mapinfo1.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
      <div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
         <center><img src="{{ asset('images/mapinfo2.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
	</div>

@endsection
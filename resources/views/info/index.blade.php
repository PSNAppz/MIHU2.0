@extends('layouts.default') @section('content')

	<div class="container">
      <nav>
		 <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-map-tab" data-toggle="tab" href="#nav-map" role="tab" aria-controls="nav-map" aria-selected="true">Toilets</a>
         <a class="nav-item nav-link" id="nav-loc-tab" data-toggle="tab" href="#nav-loc" role="tab" aria-controls="nav-loc" aria-selected="false">Students</a>
      </div>
   </nav>
   <div class="tab-content" id="nav-tabContent">
   	<div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
         <center><img src="{{ asset('images/toi.png') }}" alt=" Map2" width="100%" height="70%"></center>   
      </div>
      <div class="tab-pane fade" id="nav-loc" role="tabpanel" aria-labelledby="nav-loc-tab">
         <center><img src="{{ asset('images/locinfo.png') }}" alt=" Map2" width="100%" height="70%"></center>   
      </div>
   </div>
	</div>

@endsection
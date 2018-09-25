@extends('layouts.default') @section('content')

	<div class="container">
		<nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-nurse-tab" data-toggle="tab" href="#nav-nurse" role="tab" aria-controls="nav-" aria-selected="true">Toilets Info</a>      
      </div>
      <br>
      
   </nav>
   	<div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
         <center><img src="{{ asset('images/toi.png') }}" alt=" Map2" width="100%" height="70%"></center>   
      </div>
	</div>

@endsection
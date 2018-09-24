@extends('layouts.default') @section('content')
<br> 
<div class="container">
   @if($errors->any())
   <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
   </div>
   @endif
   <h1 class="display-4" style="color:white;">Add new Transportation Details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'transportation.store','data-parsley-validate' => '')) !!}
          {{ Form::label('mode','Mode: *')}}
          {{ Form::select('mode', array('Bus' => 'Bus', 'Train' => 'Train'), null, array('class' => 'form-control'))}}

          {{ Form::label('busno','Bus Number / Train Name:')}}
          {{ Form::text('busno',null,array('class'=> 'form-control','required'=> ''))}}
          
          {{ Form::label('contact','Contact:')}}
          {{ Form::text('contact',null,array('class'=> 'form-control','required' => ''))}}

          {{ Form::label('from','From: *')}}
          {{ Form::text('from',null,array('class'=> 'form-control','required'=> ''))}}

          {{ Form::label('destination','Destination: *')}}
          {{ Form::text('destination',null,array('class'=> 'form-control','required'=> ''))}}

          {{ Form::label('deptime','Departure Time:')}}
          {{ Form::text('deptime',null,array('class'=> 'form-control','required'=> ''))}}

          {{ Form::label('parking','Parking:')}}
          {{ Form::text('parking',null,array('class'=> 'form-control','required'=> ''))}}
          <center><br>
            {{ Form::submit('Add Details',array('class'=>'btn btn-success'))}}
            <a class="btn btn-danger" href="{{ url('/transportation') }}" role="button">Cancel</a>
          </center>
       {!! Form::close() !!}
   </div>
</div>
@endsection
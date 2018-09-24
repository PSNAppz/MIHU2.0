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
   <h1 class="display-4" style="color:white;">Add new Emergency Contact details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'emergency.store','data-parsley-validate' => '')) !!}
          {{ Form::label('service', 'Select service:') }}
          {{ Form::select('service', array('Ambulance' => 'Ambulance', 'Wheelchair' => 'Wheelchair','Security' => 'Security','Fire and Safety' => 'Fire and Safety'), null, array('class' => 'form-control'))}}
          {{ Form::label('name','Name:')}}
          {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}
          {{ Form::label('contact','Phone:')}}
          {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
          <center><br>
            {{ Form::submit('Add Details',array('class'=>'btn btn-success'))}}
            <a class="btn btn-danger" href="{{ url('/emergency') }}" role="button">Cancel</a>
          </center>
       {!! Form::close() !!}
   </div>
</div>
@endsection
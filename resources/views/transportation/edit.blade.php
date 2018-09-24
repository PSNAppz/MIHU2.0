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
   <h1 class="display-4" style="color:white;">Update Transportation Details</h1>
   <div class="col-sm">
        {{ Form::model($transportation, array('route' => array('transportation.update', $transportation->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
        {{ Form::label('mode', 'Mode: ') }}
        {{ Form::select('mode', array('Bus' => 'Bus', 'Train' => 'Train'), $transportation->mode, array('class' => 'form-control'))}}

        {{ Form::label('busno','Bus Number / Train Name: ')}}
        {{ Form::text('busno',$transportation->busno, array('class'=> 'form-control','required' => ''))}}

        {{ Form::label('contact','Contact: ')}}
        {{ Form::text('contact',$transportation->contact,array('class'=> 'form-control','required'=> ''))}}

        {{ Form::label('from', 'From: ') }}
        {{ Form::text('from',$transportation->from,array('class'=> 'form-control','required'=> ''))}}

        {{ Form::label('destination','Destination: ')}}
        {{ Form::text('destination',$transportation->destination,array('class'=> 'form-control','required'=> ''))}}

        {{ Form::label('deptime','Departure time: ')}}
        {{ Form::text('deptime',$transportation->deptime,array('class'=> 'form-control','required'=> ''))}}

        {{ Form::label('parking','Parking: ')}}
        {{ Form::text('parking',$transportation->parking,array('class'=> 'form-control','required'=> ''))}}

        {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
        <a class="btn btn-danger btn-block" href="{{ url('/transportation') }}" role="button">Cancel</a>
        {!! Form::close() !!}
   </div>
</div>
@endsection
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
   <h1 class="display-4" style="color:white;">Add new accommodation details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'accommodation.store','data-parsley-validate' => '')) !!}
      {{ Form::label('gender', 'For:') }}
      {{ Form::select('gender', array('0' => 'Men', '1' => 'Women','2' => 'Police Men','3' => 'Police Women','4' => 'VIP'), null, array('class' => 'form-control'))}}
      {{ Form::label('areaName','From Location:')}}
      {{ Form::text('areaName',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('locationofAcc','Accommodation At:')}}
      {{ Form::text('locationofAcc',null,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('category','Category/Place:')}}
      {{ Form::text('category',null,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('isFull', 'Status:') }}
      {{ Form::select('isFull', array('0' => 'Available', '1' => 'Not Available'), null, array('class' => 'form-control'))}}
      {{ Form::label('coord','Coordinator:',array('style' =>'text-align:left'))}}
      {{ Form::text('coord',null,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('contact','Phone:')}}
      {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/accommodation') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
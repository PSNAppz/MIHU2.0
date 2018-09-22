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
            {{ Form::label('name', 'Name: ') }}
            {{ Form::text('name',$cont->name,array('class'=> 'form-control','required' => ''))}}
 
            {{ Form::label('contactNum','Contact Number: ')}}
            {{ Form::text('contactNum',$cont->contactNum, array('class'=> 'form-control','required' => ''))}}

            {{ Form::label('category','Category: ')}}
            {{ Form::text('category',$cont->category,array('class'=> 'form-control','required'=> ''))}}

            {{ Form::label('place', 'Place: ') }}
            {{ Form::select('place',$cont->place,array('0' => 'Available', '1' => 'Not Available'), $cont->isFull, array('class' => 'form-control'))}}

            {{ Form::label('available','Available:')}}
            {{ Form::text('available',$cont->available,array('class'=> 'form-control','required'=> ''))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/emergency') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
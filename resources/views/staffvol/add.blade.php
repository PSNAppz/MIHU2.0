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
   <h1 class="display-4" style="color:white;">Add new Staff Volunteer details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'staff.store','data-parsley-validate' => '')) !!}
      {{ Form::label('name','Name:')}}
      {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}      
      {{ Form::label('department', 'Department:') }}
      {{ Form::text('department',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('seva','Seva:')}}
      {{ Form::text('seva',null,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('contact', 'Contact:') }}
      {{ Form::text('contact',null,array('class'=> 'form-control'))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/coordinator') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
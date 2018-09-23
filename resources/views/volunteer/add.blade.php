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
   <h1 class="display-4" style="color:white;">Add new volunteer details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'volunteer.store','data-parsley-validate' => '')) !!}
      {{ Form::label('name', 'Name:') }}
      {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('campus','Campus:')}}
      {{ Form::text('campus',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('batch','Batch:')}}
      {{ Form::text('batch',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('seva','Seva:')}}
      {{ Form::text('seva',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('contact','Contact:')}}
      {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('cordname','Coordinator:')}}
      {{ Form::text('cordname',null,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('cordcontact','Coordinator Contact:')}}
      {{ Form::text('cordcontact',null,array('class'=> 'form-control','required'=> ''))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/volunteer') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
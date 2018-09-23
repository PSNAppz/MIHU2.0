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
      {{ Form::model($cord, array('route' => array('coordinator.update', $cord->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
        {{ Form::label('department', 'Department:') }}
        {{ Form::text('department',$cord->department,array('class'=> 'form-control','required' => ''))}}
        {{ Form::label('name','Name:')}}
        {{ Form::text('name',$cord->name,array('class'=> 'form-control','required' => ''))}}
        {{ Form::label('seva','Seva:')}}
        {{ Form::text('seva',$cord->seva,array('class'=> 'form-control','required'=> ''))}}
        {{ Form::label('contact','Contact No:')}}
        {{ Form::text('contact',$cord->contact,array('class'=> 'form-control','required'=> ''))}}
      <center>
         {{ Form::submit('Edit Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/coordinator') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
</div>
@endsection
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
      {{ Form::model($staff, array('route' => array('staffvolunteer.update', $staff->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
      {{ Form::label('department', 'Department:') }}
      {{ Form::text('department',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('name','Name:')}}
      {{ Form::text('name',$staff->name,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('seva','Seva:')}}
      {{ Form::text('seva',$staff->seva,array('class'=> 'form-control','required'=> ''))}}
      <center>
         {{ Form::submit('Edit Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/coordinator') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
</div>
@endsection
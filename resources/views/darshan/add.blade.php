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
   <h1 class="display-4" style="color:white;">Add new Darshan details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'darshan.store','data-parsley-validate' => '')) !!}
      {{ Form::label('darshan_time', 'Time:') }}
      {{ Form::text('darshan_time',null,array('class'=> 'form-control','required' => ''))}}

      {{ Form::label('date','Date:')}}
      {{ Form::text('date',null,array('class'=> 'form-control','required' => ''))}}

      {{ Form::label('token_loc','Location:')}}
      {{ Form::text('token_loc',null,array('class'=> 'form-control','required' => ''))}}

      {{ Form::label('token_time','Token time: ')}}
      {{ Form::text('token_time',null,array('class'=> 'form-control','required' => ''))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/darshan') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
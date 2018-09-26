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
   <h1 class="display-4" style="color:white;">Add new Food details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'food.store','data-parsley-validate' => '')) !!}
      {{ Form::label('meal', 'Food Name') }}
      {{ Form::text('meal',null,array('class'=> 'form-control','required' => ''))}}      
      
      {{ Form::label('time','Time')}}
      {{ Form::text('time',null,array('class'=> 'form-control'))}}

      {{ Form::label('place','Place')}}
      {{ Form::text('place',null,array('class'=> 'form-control'))}}

      {{ Form::label('counter','Counter')}}
      {{ Form::text('counter',null,array('class'=> 'form-control'))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/food') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
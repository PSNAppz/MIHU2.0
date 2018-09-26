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
    {{ Form::model($food, array('route' => array('food.update', $food->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
      {{ Form::label('meal', 'Food Name') }}
      {{ Form::text('meal',$food->meal,array('class'=> 'form-control','required' => ''))}}      
      
      {{ Form::label('time','Time')}}
      {{ Form::text('time',$food->time,array('class'=> 'form-control'))}}

      {{ Form::label('place','Place')}}
      {{ Form::text('place',$food->place,array('class'=> 'form-control'))}}

      {{ Form::label('counter','Counter')}}
      {{ Form::text('counter',$food->counter,array('class'=> 'form-control'))}}
      <center>
         {{ Form::submit('Add Details',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/food') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
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
   <h1 class="display-4" style="color:white;">Add new Volunteer Care Details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'volunteercare.store','data-parsley-validate' => '')) !!}
          {{ Form::label('food','Food Item: ')}}
          {{ Form::text('food',null,array('class'=> 'form-control','required'=> ''))}}          

          {{ Form::label('time','TIme: ')}}
          {{ Form::text('time',null,array('class'=> 'form-control','required'=> ''))}}
          
          {{ Form::label('place','Available at')}}
          {{ Form::text('place',null,array('class'=> 'form-control'))}}

          <center><br>
            {{ Form::submit('Add Details',array('class'=>'btn btn-success'))}}
            <a class="btn btn-danger" href="{{ url('/volunteercare') }}" role="button">Cancel</a>
          </center>
       {!! Form::close() !!}
   </div>
</div>
@endsection
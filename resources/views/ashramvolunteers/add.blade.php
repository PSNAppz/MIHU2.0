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
   <h1 class="display-4" style="color:white;">Add new Ashram Volunteer Details</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'ashramvol.store','data-parsley-validate' => '')) !!}
          {{ Form::label('section','Section')}}
          {{ Form::text('section',null,array('class'=> 'form-control','required'=> ''))}}

          {{ Form::label('seva_place','Seva Place')}}
          {{ Form::text('seva_place',null,array('class'=> 'form-control'))}}
          
          {{ Form::label('incharge','Incharge')}}
          {{ Form::text('incharge',null,array('class'=> 'form-control', 'required'=> ''))}}

          {{ Form::label('contact','Contact')}}
          {{ Form::text('contact',null,array('class'=> 'form-control'))}}

          {{ Form::submit('Add Details',array('class'=>'btn btn-success'))}}
          <a class="btn btn-danger" href="{{ url('/ashramvolunteers') }}" role="button">Cancel</a>
          </center>
       {!! Form::close() !!}
   </div>
</div>
@endsection
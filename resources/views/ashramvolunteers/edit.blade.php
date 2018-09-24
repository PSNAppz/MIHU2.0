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
   <h1 class="display-4" style="color:white;">Update Transportation Details</h1>
   <div class="col-sm">
        {{ Form::model($ashramvolunteers, array('route' => array('ashramvol.update', $ashramvolunteers->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
        {{ Form::label('section', 'Section') }}
        {{ Form::text('section',$ashramvolunteers->section, array('class'=> 'form-control','required' => ''))}}

        {{ Form::label('seva_place','Seva Place')}}
        {{ Form::text('seva_place',$ashramvolunteers->seva_place, array('class'=> 'form-control'))}}

        {{ Form::label('incharge','Incharge')}}
        {{ Form::text('incharge',$ashramvolunteers->incharge,array('class'=> 'form-control', 'required' => ''))}}

        {{ Form::label('contact', 'Contact') }}
        {{ Form::text('contact',$ashramvolunteers->contact,array('class'=> 'form-control'))}}

        {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
        <a class="btn btn-danger btn-block" href="{{ url('/ashramvolunteers') }}" role="button">Cancel</a>
        {!! Form::close() !!}
   </div>
</div>
@endsection
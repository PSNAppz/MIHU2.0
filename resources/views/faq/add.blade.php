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
   <h1 class="display-4" style="color:white;">Ask a Question</h1>
   <div class="col-sm">
      {!! Form::open(array('route' => 'faq.store','data-parsley-validate' => '')) !!}
      {{ Form::label('question','Question :')}}
      {{ Form::text('question',null,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('answer','Answer :')}}
      {{ Form::text('answer',null,array('class'=> 'form-control','required' => ''))}}
      <center>
         {{ Form::submit('Add Question',array('class'=>'btn btn-success ','style' =>'margin-top:20px;'))}}
         <a class="btn btn-danger " href="{{ url('/faq') }}" role="button" style="margin-top:20px">Cancel</a>
      </center>
      {!! Form::close() !!}
   </div>
</div>
@endsection
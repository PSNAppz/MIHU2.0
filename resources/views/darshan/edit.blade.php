@extends('layouts.default') @section('content')
    <br> 
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
  <div class="container">
        <h1 class="display-4" style="color:white;">Edit Darshan Details</h1>
            <hr>
        {{ Form::model($darsh, array('route' => array('darshan.update', $darsh->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
        {{ Form::label('darshan_time','Darshan time:')}}
        {{ Form::text('darshan_time',$darsh->darshan_time,array('class'=> 'form-control','required' => ''))}}
        {{ Form::label('date','Date:')}}
        {{ Form::text('date',$darsh->date,array('class'=> 'form-control','required'=> ''))}}
        {{ Form::label('token_loc','Token location:')}}
        {{ Form::text('token_loc',$darsh->token_loc,array('class'=> 'form-control','required'=> ''))}}
        {{ Form::label('token_time','Token time:')}}
        {{ Form::text('token_time',$darsh->token_time,array('class'=> 'form-control','required'=> ''))}}  <br>
        <center>{{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-lg'))}}
                <a class="btn btn-danger btn-lg" href="{{ url('/darshan') }}" role="button">Cancel</a>
                {!! Form::close() !!}
        </center>
    </div>
@endsection
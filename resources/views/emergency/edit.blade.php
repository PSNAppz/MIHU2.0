@extends('layouts.default') @section('content')
    <br> 
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
  <div class="container">
        <h1 class="display-4" style="color:white;">Edit Emergency Contact Details</h1>
            <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr>
            {{ Form::model($cont, array('route' => array('emergency.update', $cont->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
            {{ Form::label('name', 'Name: ') }}
            {{ Form::text('name',$cont->name,array('class'=> 'form-control','required' => ''))}}
 
            {{ Form::label('contactNum','Contact Number: ')}}
            {{ Form::text('contactNum',$cont->contactNum, array('class'=> 'form-control','required' => ''))}}

            {{ Form::label('category','Category: ')}}
            {{ Form::text('category',$cont->category,array('class'=> 'form-control','required'=> ''))}}

            {{ Form::label('place', 'Place: ') }}
            {{ Form::select('place',$cont->place,array('0' => 'Available', '1' => 'Not Available'), $cont->isFull, array('class' => 'form-control'))}}

            {{ Form::label('available','Available:')}}
            {{ Form::text('available',$cont->available,array('class'=> 'form-control','required'=> ''))}}

            {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            <a class="btn btn-danger btn-block" href="{{ url('/emergency') }}" role="button">Cancel</a>
            {!! Form::close() !!}
        </div>
    </div>
    </div>


@endsection
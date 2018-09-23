@extends('layouts.default') @section('content')
    <br>
  <div class="container">
      @if(Session::has('success'))
      <div class="alert alert-success">
         {{ Session::get('success') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      @endif
        <h1 class="display-1" style="color:white;">FAQs</h1>
        @if(!Auth::guest())
        <a class="btn btn-success btn-lg" href="{{ url('/faq/create') }}" role="button">Add a FAQ</a>
        @endif <br><br>
        @foreach($comment as $comm)
        <div class="alert alert-info" role="alert">
          <h2>{{$comm->question}}
          @if(!Auth::guest())
              {{ Form::open(['method' => 'DELETE', 'route' => ['faq.destroy', $comm->id]]) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
              {{ Form::close() }}
              
          @endif
        </h2>
          <hr>
          <h5>Answer: {{$comm->answer}}</h5>
        </div>
        @endforeach 
    </div>
@endsection
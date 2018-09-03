@extends('layouts.default') @section('content')
    <br> 
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
  <div class="container">
        <center>
            <h1 style="color: white;"> <i class="fa fa-exclamation-triangle"></i> Uhm... 404 -_-</h1>
        </center>
    </div>


@endsection
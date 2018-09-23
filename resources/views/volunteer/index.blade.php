@extends('layouts.default') @section('content')
    <br> 
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
  <div class="container">
        <center>
        <h1 class="display-4" style="color:white;">Volunteers</h1>
            
        </center>
    </div>


@endsection
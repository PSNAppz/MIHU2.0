@extends('layouts.default') @section('content')
<div class="container">
  @if(Session::has('success'))
  <div class="alert alert-info">
     {{ Session::get('success') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
  </div>
  @endif
  <h1 class="display-4">Volunteer Care</h1>
  @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/volunteercare/create') }}" role="button" >Add New +</a>
  @endif <br><br>
  @foreach($vcc as $vcc)
    <div class="alert alert-info" role="alert">
      <h4 class="alert-heading"><div class="alert alert-warning" role="alaert">Food name:  {{ $vcc->food }}</div></h4>@if(!Auth::guest())
      {{ Form::open(['method' => 'DELETE', 'route' => ['volunteercare.destroy', $vcc->id]]) }}
      {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
      {{ Form::close() }}
        @endif
        <hr>
        <div class="alert alert-danger" role="alaert">Available at : {{ $vcc->place }}</div>
      <div class="alert alert-danger" role="alaert"><p class="mb-0">From : {{ $vcc->time }} onwards</p></div>
    </div>
    @endforeach
</div>  
@endsection
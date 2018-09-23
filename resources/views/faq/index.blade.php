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
        <center>
        <h1 class="display-1" style="color:white;">FAQs</h1>
        @foreach($comment as $comm)
        <div class="accordion" id="accordion{{$comm->id}}">
          <div class="card">
            <div class="card-header" id="heading{{$comm->id}}">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$comm->id}}" aria-expanded="true" aria-controls="collapse{{$comm->id}}">
                    {{$comm->question}}
                </button>
              </h5>
              @if(!Auth::guest())
            <a class="btn btn-warning" href="{{ route('faq.edit', $comment->id, '/edit')}}" role="button">Add answer</a>  
            
            @endif
            </div>
            <div id="collapse{{$comm->id}}" class="collapse text-white bg-info" aria-labelledby="heading{{$comm->id}}" data-parent="#accordion{{$comm->id}}">
              <div class="card-body">
                {{$comm->answer}}
              </div>
            </div>
          </div>
        </div>
        @endforeach 
        </center>
    </div>
@endsection
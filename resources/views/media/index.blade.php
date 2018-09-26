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
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Ashram </h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <!-- <a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Student Volunteers</a> -->
         <a class="nav-item nav-link active" id="nav-shift-tab" data-toggle="tab" href="#nav-shift" role="tab" aria-controls="nav-shift" aria-selected="true">Brahmachari's</a>
         <a class="nav-item nav-link" id="nav-dev-tab" data-toggle="tab" href="#nav-dev" role="tab" aria-controls="nav-dev" aria-selected="false">Brahmacharini's</a>
      </div>
      <br>
   </nav>


   <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active " id="nav-shift" role="tabpanel" aria-labelledby="nav-shift-tab">
                <center><img src="{{ asset('images/brahmachari-1.jpg') }}" alt=" Map1" width="100%" height="70%">
                    <img src="{{ asset('images/brahmachari1-3.jpg') }}" alt=" Map1" width="100%" height="70%"></center>
        </div>
        <div class="tab-pane fade show " id="nav-dev" role="tabpanel" aria-labelledby="nav-dev-tab">
        <br>
        <br>
            <!-- Brahmacharinis -->

        <div class="accordion" id="accordionExample">
                <center>
                    <img src="{{ asset('images/brahmacharinis.jpg') }}" alt=" Map1" width="100%" height="70%">
                    <img src="{{ asset('images/brahmacharinis-2.jpg') }}" alt=" Map1" width="100%" height="70%">
                </center>
        </div>
   </div>
</div>
@endsection
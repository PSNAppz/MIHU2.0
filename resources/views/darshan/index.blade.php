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
   <script>
      $(document).ready( function () {
       $('#darshinst').DataTable();
       $('#darshtiming').DataTable();
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Darshan Details</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-darshtiming-tab" data-toggle="tab" href="#nav-darshtiming" role="tab" aria-controls="nav-darshtiming" aria-selected="true">Darshan Timing</a>
         <a class="nav-item nav-link" id="nav-darshinst-tab" data-toggle="tab" href="#nav-darshinst" role="tab" aria-controls="nav-darshinst" aria-selected="false">Darshan Instruction-EN</a>
         <a class="nav-item nav-link" id="nav-darshinstml-tab" data-toggle="tab" href="#nav-darshinstml" role="tab" aria-controls="nav-darshinstml" aria-selected="false">Darshan Instruction-MAL</a>
         <a class="nav-item nav-link" id="nav-darshinsttl-tab" data-toggle="tab" href="#nav-darshinsttl" role="tab" aria-controls="nav-darshinsttl" aria-selected="false">Darshan Instruction-TAMIL</a>
      </div>
      <br>
     
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-darshtiming" role="tabpanel" aria-labelledby="nav-darshtiming-tab">
            @if(!Auth::guest())
            <a class="btn btn-primary " href="{{ url('/darshan/create') }}" role="button" >Add New +</a>
            <a  id="xlsf" href="{{ URL::to('downloadExcel/darshan/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
            <a id="xlsxf" href="{{ URL::to('downloadExcel/darshan/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
            <a id="csvf" href="{{ URL::to('downloadExcel/darshan/csv') }}"><button class="btn btn-info">Download CSV</button></a>
            @endif
            <br>
            <br>
         <table id="darshantiming" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <tr>
                  <th>Time</th>
                  <th>Date</th>
                  <th>Location</th>
                  <th>Token time</th>
                  @if(!Auth::guest())
                  <th>Update</th>
                  <th>Delete</th>
                  @endif
               </tr>
            </thead>
            <tbody>
               @foreach($darshan as $darshan)
               <tr>
                  <th>{{ $darshan->darshan_time }}</th>
                  <th>{{ $darshan->date}}</th>
                  <th>{{$darshan->token_loc}}</th>
                  <th>{{$darshan->token_time}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('darshan.edit', $darshan->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['darshan.destroy', $darshan->id]]) }}
                     {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                     {{ Form::close() }}
                  </th>
                  @endif
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <div class="tab-pane fade show " id="nav-darshinst" role="tabpanel" aria-labelledby="nav-darshinst-tab">
            <center><img src="{{ asset('images/Darshan_EN.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
      <div class="tab-pane fade show " id="nav-darshinstml" role="tabpanel" aria-labelledby="nav-darshinstml-tab">
            <center><img src="{{ asset('images/Darshan_ML.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
      <div class="tab-pane fade show " id="nav-darshinsttl" role="tabpanel" aria-labelledby="nav-darshinsttl-tab">
            <center><img src="{{ asset('images/Darshan_TM.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
   </div>
</div>
@endsection
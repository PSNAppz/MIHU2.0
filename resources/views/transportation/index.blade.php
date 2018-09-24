@extends('layouts.default') @section('content')
<br> 
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
       $('#bus').DataTable();
       $('#train').DataTable();
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Transportation Details</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-bus-tab" data-toggle="tab" href="#nav-bus" role="tab" aria-controls="nav-bus" aria-selected="true">Bus Schedules</a>
         <a class="nav-item nav-link" id="nav-train-tab" data-toggle="tab" href="#nav-train" role="tab" aria-controls="nav-train" aria-selected="false">Train Schedules</a>
      </div>
      <br>
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/transportation/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/transportation/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/transportation/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/transportation/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-bus" role="tabpanel" aria-labelledby="nav-home-tab">
         <table id="bus" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <th>Bus number</th>
               <th>Contact</th>
               <th>From</th>
               <th>Destination</th>
               <th>Departure time</th>
               <th>Parking</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($transportation as $transport)
               @if ($transport->mode == "Bus")
               <tr>
                  <th>{{ $transport->busno}}</th>
                  <th>{{ $transport->contact}}</th>
                  <th>{{ $transport->from}}</th>
                  <th>{{ $transport->destination}}</th>
                  <th>{{ $transport->deptime}}</th>
                  <th>{{ $transport->parking}}</th> 
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('transportation.edit', $transport->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['transportation.destroy', $transport->id]]) }}
                     {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                     {{ Form::close() }}
                  </th>
                  @endif
               </tr>
               @endif
               @endforeach
            </tbody>
         </table>
      </div>
      <div class="tab-pane fade" id="nav-train" role="tabpanel" aria-labelledby="nav-train-tab">
         <table id="train" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>Train Name</th>
               <th>From</th>
               <th>Destination</th>
               <th>Departure Time</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($transportation as $transport)
               @if ($transport->mode == "Train")
               <tr>
                  <th>{{ $transport->busno}}</th>
                  <th>{{ $transport->from}}</th>
                  <th>{{ $transport->destination}}</th>
                  <th>{{ $transport->deptime}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('transportation.edit', $transport->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['transportation.destroy', $transport->id]]) }}
                     {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                     {{ Form::close() }}
                  </th>
                  @endif
               </tr>
               @endif
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection
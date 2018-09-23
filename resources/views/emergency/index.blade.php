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
   <script>
      $(document).ready( function () {
       $('#medical').DataTable();
       $('#fireandsafety').DataTable();
       $('#security').DataTable();
       $('#codered').DataTable();
       $('#manmissing').DataTable();      
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Emergency Contacts</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-medical-tab" data-toggle="tab" href="#nav-medical" role="tab" aria-controls="nav-medical" aria-selected="true">Medical</a>
         <a class="nav-item nav-link" id="nav-fireandsafety-tab" data-toggle="tab" href="#nav-fireandsafety" role="tab" aria-controls="nav-fireandsafety" aria-selected="false">Fire and Safety</a>
         <a class="nav-item nav-link" id="nav-security-tab" data-toggle="tab" href="#nav-security" role="tab" aria-controls="nav-security" aria-selected="false">Security</a>      
        </div>
      <br>
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/emergency/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/emergency/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/emergency/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/emergency/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-medical" role="tabpanel" aria-labelledby="nav-home-tab">
         <table id="medical" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <th>Service</th>
               <th>Name</th>
               <th>Contact Number</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($emergency as $emer)
               @if ($emer->service == "Ambulance" || $emer->service == "Wheelchair")
               <tr>
                  <th>{{ $emer->service}}</th>
                  <th>{{ $emer->name}}</th>
                  <th>{{ $emer->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy',$emer->id]]) }}
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
      <div class="tab-pane fade" id="nav-fireandsafety" role="tabpanel" aria-labelledby="nav-fireandsafety-tab">
         <table id="fireandsafety" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>Service</th>
               <th>Name</th>
               <th>Contact Number</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($emergency as $emer)
               @if ($emer->service == "fire and safety" || $emer->service == "Fire and Safety")
               <tr>
                  <th>{{ $emer->service}}</th>
                  <th>{{ $emer->name}}</th>
                  <th>{{ $emer->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy',$emer->id]]) }}
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
      <div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab">
         <table id="security" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>Service</th>
               <th>Name</th>
               <th>Contact Number</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($emergency as $emer)
               @if ($emer->service == "service" || $emer->service == "Security")
               <tr>
                  <th>{{ $emer->service}}</th>
                  <th>{{ $emer->name}}</th>
                  <th>{{ $emer->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy',$emer->id]]) }}
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
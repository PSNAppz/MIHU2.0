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
       $('#volunteer').DataTable();
       $('#vol').DataTable();
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Volunteers</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Student Volunteers</a>
         <a class="nav-item nav-link" id="nav-dev-tab" data-toggle="tab" href="#nav-dev" role="tab" aria-controls="nav-dev" aria-selected="false">Staff Volunteers</a>
      </div>
      <br>
      
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
         @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/volunteer/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/accommodations/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/accommodations/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/accommodations/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
         <table id="volunteer" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Batch</th>
                  <th>Campus</th>
                  <th>Contact</th>
                  <th>Seva</th>
                  <th>Coordinator</th>
                  <th>Coordinator Contact</th>
                  @if(!Auth::guest())
                  <th>Update</th>
                  <th>Delete</th>
                  @endif
               </tr>
            </thead>
            <tbody>
               @foreach($volunteers as $vol)
               <tr>
                  <th>{{ $vol->name}}</th>
                  <th>{{ $vol->batch}}</th>
                  <th>{{$vol->campus}}</th>
                  <th>{{$vol->contact}}</th>
                  <th>{{ $vol->seva}}</th>
                  <th>{{ $vol->cordname}}</th>
                  <th>{{ $vol->cordcontact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('volunteer.edit', $vol->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['volunteer.destroy', $vol->id]]) }}
                     {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                     {{ Form::close() }}
                  </th>
                  @endif
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <div class="tab-pane fade show " id="nav-dev" role="tabpanel" aria-labelledby="nav-dev-tab">
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/staff/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/staffvol/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/staffvol/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/staffvol/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
         <table id="vol" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Seva</th>
                  <th>Department</th>
                  <th>Contact</th>
                  @if(!Auth::guest())
                  <th>Update</th>
                  <th>Delete</th>
                  @endif
               </tr>
            </thead>
            <tbody>
               @foreach($staffs as $cord)
               <tr>
                  <th>{{ $cord->name}}</th>
                  <th>{{ $cord->seva}}</th>
                  <th>{{ $cord->department}}</th>
                  <th>{{$cord->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('staff.edit', $cord->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['staff.destroy', $cord->id]]) }}
                     {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                     {{ Form::close() }}
                  </th>
                  @endif
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection
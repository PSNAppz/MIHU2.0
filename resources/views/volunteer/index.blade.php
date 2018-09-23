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
       $('#devoteevol').DataTable();
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
         <a class="nav-item nav-link active" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Volunteers</a>
         <a class="nav-item nav-link" id="nav-dev-tab" data-toggle="tab" href="#nav-dev" role="tab" aria-controls="nav-dev" aria-selected="false">Devotee Volunteers</a>
      </div>
      <br>
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/volunteer/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/accommodations/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/accommodations/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/accommodations/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
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
        
      </div>
   </div>
</div>
@endsection
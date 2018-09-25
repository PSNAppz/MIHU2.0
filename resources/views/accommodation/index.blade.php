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
       $('#devotees').DataTable();
       $('#students').DataTable();
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Accommodation Details</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-devotee-tab" data-toggle="tab" href="#nav-devotee" role="tab" aria-controls="nav-devotee" aria-selected="true">Devotees</a>
         <a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="false">Location Info</a>
      </div>
      <br>
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/accommodation/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/accommodations/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/accommodations/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/accommodations/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-devotee" role="tabpanel" aria-labelledby="nav-home-tab">
         <table id="devotees" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <th>State/Others</th>
               <th>Place/Category</th>
               <th>For:</th>
               <th>Accommodation at</th>
               <th>Contact Name</th>
               <th>Phone</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($accommodations as $acc)
               @if ($acc->areaName != "Amrita University" && $acc->areaName != "Amrita Vidyalayam")
               <tr>
                  <th>{{ $acc->areaName}}</th>
                  <th>{{ $acc->category}}</th>
                  @if($acc->gender==0)
                  <th>Men</th>
                  @elseif($acc->gender==1)
                  <th>Women</th>
                  @elseif($acc->gender==4)
                  <th>VIP</th>
                  @elseif($acc->gender==2)
                  <th>Police Men</th>
                  @else
                  <th>Police Women</th>
                  @endif
                  <th>{{ $acc->locationofAcc}}</th>
                  <th>{{ $acc->coord}}</th>
                  <th>{{ $acc->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('accommodation.edit', $acc->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['accommodation.destroy', $acc->id]]) }}
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
      <div class="tab-pane fade" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
         <table id="students" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>State/Others</th>
               <th>Place/Category</th>
               <th>For:</th>
               <th>Accommodation at</th>
               <th>Contact Name</th>
               <th>Phone</th>
               @if(!Auth::guest())
               <th></th>
               <th></th>
               @endif
            </thead>
            <tbody>
               @foreach($accommodations as $acc)
               @if ($acc->areaName == "Amrita University" || $acc->areaName == "Amrita Vidyalayam")
               <tr>
                  <th>{{ $acc->areaName}}</th>
                  <th>{{ $acc->category}}</th>
                  @if($acc->gender==0)
                  <th>Men</th>
                  @elseif($acc->gender==1)
                  <th>Women</th>
                  @elseif($acc->gender==4)
                  <th>VIP</th>
                  @elseif($acc->gender==2)
                  <th>Police Men</th>
                  @else
                  <th>Police Women</th>
                  @endif
                  <th>{{ $acc->locationofAcc}}</th>
                  <th>{{ $acc->coord}}</th>
                  <th>{{ $acc->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('accommodation.edit', $acc->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['accommodation.destroy', $acc->id]]) }}
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
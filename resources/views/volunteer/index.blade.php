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
       $('#ashramvol').DataTable();
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
         {{-- <a class="nav-item nav-link active" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Student Volunteers</a> --}}
         <a class="nav-item nav-link active" id="nav-shift-tab" data-toggle="tab" href="#nav-shift" role="tab" aria-controls="nav-shift" aria-selected="true">Volunteer Shifts</a>
         <a class="nav-item nav-link" id="nav-dev-tab" data-toggle="tab" href="#nav-dev" role="tab" aria-controls="nav-dev" aria-selected="false">Staff Volunteers</a>
         <a class="nav-item nav-link" id="nav-stafshf-tab" data-toggle="tab" href="#nav-stafshf" role="tab" aria-controls="nav-stafshf" aria-selected="false">Staff Shifts</a>
         <a class="nav-item nav-link" id="nav-ash-tab" data-toggle="tab" href="#nav-ash" role="tab" aria-controls="nav-ash" aria-selected="false">Ashram Volunteers</a>

      </div>
      <br>
      
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show " id="nav-shift" role="tabpanel" aria-labelledby="nav-shift-tab">
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          MIHU Student Shift Main gate
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <center><img src="{{ asset('images/image1.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          MIHU Student shift Counters
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <center><img src="{{ asset('images/image2.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          MIHU Student shift Lobby
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <center><img src="{{ asset('images/image 3.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          MIHU Student shift Ashram Counter
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <center><img src="{{ asset('images/image 4.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          MIHU Student shift Back Gate
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <center><img src="{{ asset('images/image 5.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          MIHU Student shift Bio Tech
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <center><img src="{{ asset('images/image 6.png') }}" alt=" Map1" width="100%" height="70%"></center>  
      </div>
    </div>
  </div>
   </div>
   <div class="tab-pane fade show " id="nav-stafshf" role="tabpanel" aria-labelledby="nav-stafshf-tab">
      <center>
         <img src="{{ asset('images/image 8-1.png') }}" alt=" Map1" width="100%" height="70%">
         <img src="{{ asset('images/image 8-2.png') }}" alt=" Map1" width="100%" height="70%">
         <img src="{{ asset('images/image 8-3.png') }}" alt=" Map1" width="100%" height="70%">
      </center>  
   </div>

        

      {{-- <div class="tab-pane fade show active" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
         @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/volunteer/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/volunteer/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/volunteer/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/volunteer/csv') }}"><button class="btn btn-info">Download CSV</button></a>
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
      </div> --}}
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
      <div class="tab-pane fade show " id="nav-ash" role="tabpanel" aria-labelledby="nav-ash-tab">
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/ashramvol/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/ashramvol/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/ashramvol/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/ashramvol/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
         <table id="ashramvol" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Seva</th>
                  <th>Seva Place</th>
                  <th>Contact</th>
                  @if(!Auth::guest())
                  <th>Update</th>
                  <th>Delete</th>
                  @endif
               </tr>
            </thead>
            <tbody>
               @foreach($ashramvols as $cord)
               <tr>
                  <th>{{ $cord->incharge}}</th>
                  <th>{{ $cord->section}}</th>
                  <th>{{ $cord->seva_place}}</th>
                  <th>{{$cord->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('ashramvol.edit', $cord->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['ashramvol.destroy', $cord->id]]) }}
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
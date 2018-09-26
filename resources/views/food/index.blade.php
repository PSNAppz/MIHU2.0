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
       $('#food').DataTable();
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Food Details</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab" aria-controls="nav-food" aria-selected="true">Food</a>
      </div>
      <br>
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/food/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/food/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/food/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/food/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-food" role="tabpanel" aria-labelledby="nav-home-tab">
         <table id=food class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <th>Food name</th>
               <th>Time</th>
               <th>Place</th>
               <th>Counter </th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($food as $food)
               <tr>
                  <th>{{ $food->meal}}</th>
                  <th>{{ $food->time}}</th>
                  <th>{{ $food->place}}</th>
                  <th>{{ $food->counter}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('food.edit', $food->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['food.destroy', $food->id]]) }}
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
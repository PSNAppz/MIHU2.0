@extends('layouts.default') @section('content')
    <br>
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
        $('#').DataTable();
        $('#').DataTable();
       } );
    </script>
    <style type="text/css">
       body{
       color:white;
       }
    </style>
    <div class="container">
        <h1>Darshan Details</h1>
        @if(!Auth::guest())
            <a class="btn btn-success" href="{{ url('/darshan/create') }}" role="button">Add New Timing</a>
            <a  id="xlsf" href="{{ URL::to('downloadExcel/darshan/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
            <a id="xlsxf" href="{{ URL::to('downloadExcel/darshan/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
            <a id="csvf" href="{{ URL::to('downloadExcel/darshan/csv') }}"><button class="btn btn-info">Download CSV</button></a>

        @endif
    </div>
@endsection()
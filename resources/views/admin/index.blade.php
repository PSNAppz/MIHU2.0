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
    <div class="row">
        <div class="col-md-6">
            <div class="card" id="card_gradient4">
                <div class="card-header"><i class="fa fa-info"></i> Dashboard</div>
                <div class="card-body" style="color: white"> 
                    Hello {{ Auth()->user()->name }} ,<br><br>
                    Welcome to MIHU 2.0 dashboard. Please be responsible for what you do here. All the action performed here will be logged and monitored. You can see your action logs below.<br><br>
                    <span class="badge badge-warning">NOTE:</span> Please keep your credential safe and secure.

                    <br><br>
                    Thank You,<br>
                    PSN
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" id="card_gradient2">
                <div class="card-header"><i class="fa fa-tachometer"></i> CPU Load</div>
                <div class="card-body">
                    <div id="myChart" width="200" height="89"></div>
                    <script>
                         
        
   function getChart(){
        
        var url = "{{url('chart')}}";
        var load = new Array();
          $.get(url, function(response){
            response.forEach(function(data){
                load.push(data);
            });

var chartData = {
      type: 'gauge',  // Specify your chart type here.
      labels:[],
      title: {
        text: 'CPU LOAD' // Adds a title to your chart
      },
      
      legend: {}, // Creates an interactive legend
      series:[
    {
      "values":[load[0]],
      "csize":"5%",     //Needle Width
      "size":"70%",    //Needle Length
      "background-color":"#000000"  //Needle Color    
    },
    {
      "values":[load[1]],
      "csize":"5%",
      "size":"75%",
      "background-color":"#CC0066"
    },
    {
      "values":[load[2]],
      "csize":"5%",
      "size":"70%",
      "background-color":"#66CCFF #FFCCFF" 
    }
  ]
    };
    zingchart.render({ // Render Method[3]
      id: 'myChart',
      data: chartData,
      height: 220,
      width: 500
    });
});

      }
      getChart();
       setInterval(function(){
        getChart();
        },1000);


</script>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-4">
            <div class="card" id="card_gradient2">
                <div class="card-header"><i class="fa fa-file-text"></i> Logs</div>
                <div class="card-body">
                  @if(Auth::user()->name=="PSNAppZ")<th><a href="{{ URL::to('admin/clearlogs') }}"><button class="btn btn-danger">Clear Logs</button></a></th>@endif
                    <hr>
                    <div class="alert alert-light" role="alert">
                        {{ Auth()->user()->name }} <span class="badge badge-success">Uploaded</span> Accommodation details.
                    </div>
                    <div class="alert alert-light" role="alert">
                        {{ Auth()->user()->name }} <span class="badge badge-danger">Removed</span> Security details.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" id="card_gradient1">
                <div class="card-header"><i class="fa fa-bullhorn"></i> Announcements</div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="card" id="card_gradient1">
                <div class="card-header"><i class="fa fa-file"></i> Import/Export Data</div>
                <div class="card-body">
                <form>
                  <h5>Select data location</h5>
                    <input type="radio" name="redirect" onClick="changeVal(1)"><span> Accommodation</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(2)"><span> Transportation</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(3)"><span> Darshan</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(4)"><span> Security</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(5)"><span> Special Event</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(6)"><span> Food</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(7)"><span> Coordinator</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(8)"><span> Staff Volunteer</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(9)"><span> Seva</span><br>
                    <input type="radio" name="redirect"  onClick="changeVal(10)"><span> Volunteers</span><br>
                </form>
                <br>
                <h5>Choose a format</h5>
                <a  id="xlsf" href=""><button class="btn btn-info">Download Excel xls</button></a>
                <a id="xlsxf" href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
                <a id="csvf" href=""><button class="btn btn-info">Download CSV</button></a>
                <br>
                <br>
                <form id="import" action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" name="import_file" />
                    <button class="btn btn-success">Import File</button>
                </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<script>
function changeVal(value){
    var a = parseInt(value);
    if(a == 1){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/accommodations/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/accommodations/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/accommodations/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/accommodations') }}";
    }
    if(a == 2){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/transport/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/transport/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/transport/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/transport') }}";
    }
    if(a == 3){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/darshan/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/darshan/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/darshan/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/darshan') }}";
    }
    if(a == 4){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/security/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/security/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/security/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/security') }}";
    }
    if(a == 5){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/specialevent/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/specialevent/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/specialevent/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/specialevent') }}";
    }
    if(a == 6){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/food/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/food/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/food/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/food') }}";
    }
    if(a == 7){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/coordinator/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/coordinator/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/coordinator/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/coordinator') }}";
    }
    if(a == 8){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/staff/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/staff/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/staff/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/staff') }}";
    }
    if(a == 9){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/seva/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/seva/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/seva/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/seva') }}";
    }
    if(a == 10){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");
        csv.href = "{{ URL::to('downloadExcel/volunteer/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/volunteer/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/volunteer/xlsx') }}";
        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/volunteer') }}";
    }
}
</script>
@endsection
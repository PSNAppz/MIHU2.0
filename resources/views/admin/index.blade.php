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
                <div class="card-body" style="overflow-y: auto;height: 400px;">
                  @if(Auth::user()->name=="PSN")<th><a href="{{ URL::to('/clearlogs') }}"><button class="btn btn-danger">Clear Logs</button></a></th>@endif
                    <br>
                    @foreach($logs as $log)
                    <div class="alert alert-light" role="alert">
                         <b>#{{$log->id}}</b>
                         {{ $log->name}}
                         @if($log->actionval == 1)
                         <span class="badge badge-success">Added</span>
                         @elseif($log->actionval == 2)
                         <span class="badge badge-warning">Updated</span>
                         @elseif($log->action == "Logs")
                         <span class="badge badge-info">Cleared</span>
                         @else
                         <span class="badge badge-danger">Deleted</span>
                         @endif
                          {{$log->action}} <br><i>Time : {{$log->created_at}}</i>
                    </div>
                    @endforeach
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
                    <input type="radio" name="redirect"  onClick="changeVal(1)"><span> Accommodation</span><br>
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

@endsection
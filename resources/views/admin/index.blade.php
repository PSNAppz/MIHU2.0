@extends('layouts.default') @section('content')
<div class="container">
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
            <div class="card" >
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
  </div>
</div>
@endsection
@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" id="card_gradient1">
                <div class="card-header"><i class="fa fa-tachometer"></i> Dashboard</div>
                <div class="card-body">
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
            <div class="card" id="card_gradient1">
                <div class="card-header"><i class="fa fa-upload"></i> Data Uploads</div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-4">
            <div class="card" id="card_gradient1">
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
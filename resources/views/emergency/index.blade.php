@extends('layouts.default') @section('content')
<br> 
<div class="container">
   @if(Session::has('success'))
   <div class="alert alert-success">
      {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif
   <script>
      $(document).ready( function () {
       $('#medical').DataTable();
       $('#fireandsafety').DataTable();
       $('#security').DataTable();
       $('#codered').DataTable();
       $('#manmissing').DataTable();    
       $('#nurse').DataTable();
       $('#aims').DataTable();  
      } );
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Emergency Contacts</h2>
   <br>
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <a class="nav-item nav-link active" id="nav-nurse-tab" data-toggle="tab" href="#nav-nurse" role="tab" aria-controls="nav-" aria-selected="false">Nursing Students Duty List</a>
         <a class="nav-item nav-link " id="nav-medical-tab" data-toggle="tab" href="#nav-medical" role="tab" aria-controls="nav-medical" aria-selected="true">Medical</a>
         <a class="nav-item nav-link" id="nav-fireandsafety-tab" data-toggle="tab" href="#nav-fireandsafety" role="tab" aria-controls="nav-fireandsafety" aria-selected="false">Fire and Safety</a>
         <a class="nav-item nav-link" id="nav-security-tab" data-toggle="tab" href="#nav-security" role="tab" aria-controls="nav-security" aria-selected="false">Security</a>  
         <a class="nav-item nav-link" id="nav-aims-tab" data-toggle="tab" href="#nav-aims" role="tab" aria-controls="nav-aims" aria-selected="false">AIMS Intern List</a>      
               
        </div>
      <br>
      @if(!Auth::guest())
      <a class="btn btn-primary " href="{{ url('/emergency/create') }}" role="button" >Add New +</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/emergency/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/emergency/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/emergency/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
      <br>
      <br>
   </nav>
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade" id="nav-medical" role="tabpanel" aria-labelledby="nav-home-tab">
         <table id="medical" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <th>Service</th>
               <th>Name</th>
               <th>Contact Number</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($emergency as $emer)
               @if ($emer->service == "Ambulance" || $emer->service == "Wheelchair")
               <tr>
                  <th>{{ $emer->service}}</th>
                  <th>{{ $emer->name}}</th>
                  <th>{{ $emer->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy',$emer->id]]) }}
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
      <div class="tab-pane fade" id="nav-aims" role="tabpanel" aria-labelledby="nav-aims-tab">
         <table id="aims" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
            <thead>
               <th>Name of Intern</th>
               <th>Department</th>
               <th>Roll No</th>
               <th>Contact</th>
            </thead>
            <tbody>
               <tr>
                  <th>Gowri Asok</th>
                  <th>Comm.Medicine</th>
                  <th>KH.MD.U6MBB13047</th>
                  <th>9605322386</th>
               </tr>
               <tr>
                  <th>Dhanasree</th>
                  <th>Comm.Medicine</th>
                  <th>KH.MD.U6MBB13040</th>
                  <th>7034425256</th>
               </tr>
               <tr>
                  <th>Athulya Balagopal</th>
                  <th>Comm.Medicine</th>
                  <th>KH.MD.U6MBB13033</th>
                  <th>9946214971</th>
               </tr>
               <tr>
                  <th>Gayathri Santosh</th>
                  <th>Comm.Medicine</th>
                  <th>KH.MD.U6MBB13042</th>
                  <th>8281630959</th>
               </tr>
               <tr>
                  <th>Gayathri Kashyap</th>
                  <th>Comm.Medicine</th>
                  <th>KH.MD.U6MBB13043</th>
                  <th>7034337667</th>
               </tr>
               <tr>
                  <th>Navnaeeth</th>
                  <th>Peadiatrics</th>
                  <th>KH.MD.U6MBB13067</th>
                  <th>8606598597</th>
               </tr>
               <tr>
                  <th>Namith Ranjith</th>
                  <th>Peadiatrics</th>
                  <th>KH.MD.U6MBB13065</th>
                  <th>9847360325</th>
               </tr>
               <tr>
                  <th>Anjali Ajith</th>
                  <th>ENT</th>
                  <th>KH.MD.U6MBB13024</th>
                  <th>7561051281</th>
               </tr>
               <tr>
                  <th>Aparna Ajay</th>
                  <th>Casuality</th>
                  <th>KH.MD.U6MBB13026</th>
                  <th>9072719477</th>
               </tr>
               <tr>
                  <th>Keerthana G</th>
                  <th>General Medicine</th>
                  <th>KH.MD.U6MBB13055</th>
                  <th>8281818620</th>
               </tr>
               <tr>
                  <th>Keerthi Raj</th>
                  <th>General Medicine</th>
                  <th>KH.MD.U6MBB13057</th>
                  <th>957336467</th>
               </tr>
               <tr>
                  <th>Meenu C Nair</th>
                  <th>General Medicine</th>
                  <th>KH.MD.U6MBB13063</th>
                  <th>7559920106</th>
               </tr>
               <tr>
                  <th>Mohammed Aslam</th>
                  <th>General Medicine</th>
                  <th>KH.MD.U6MBB13064</th>
                  <th>8907392893</th>
               </tr>
               <tr>
                  <th>Suvarnameena</th>
                  <th>OBG</th>
                  <th>KH.MD.U6MBB13097</th>
                  <th>9600795950</th>
               </tr>
               <tr>
                  <th>Abhinav Vaidyanathan</th>
                  <th>Pain & Palliative</th>
                  <th>KH.MD.U6MBB13002</th>
                  <th>8089683321</th>
               </tr>
               <tr>
                  <th>Aishwarya Mathew</th>
                  <th>Anaesthesia</th>
                  <th>KH.MD.U6MBB13011</th>
                  <th>9961608334</th>
               </tr>
               <tr>
                  <th>Pillai Suraj Rashakrishnan</th>
                  <th>General Surgery</th>
                  <th>KH.MD.U6MBB13074</th>
                  <th>7736645560</th>
               </tr>
               <th>
                  <th>Priya S</th>
                  <th>General Surgery</th>
                  <th>KH.MD.U6MBB13079</th>
                  <th>8111913811</th>
               </tr>
               <tr>
                  <th>Sarath krishna</th>
                  <th>Anaesthesia</th>
                  <th>KH.MD.U6MBB13089</th>
                  <th>9539064091</th>
               </tr>
               <tr>
                  <th>Amrita Baiju</th>
                  <th>Ophthalmology</th>
                  <th>KH.MD.U6MBB13018</th>
                  <th>9496186895</th>
               </tr>
               <tr>
                  <th>Amritha Ben Mani</th>
                  <th>Orthopeadics</th>
                  <th>KH.MD.U6MBB13017</th>
                  <th>860658300</th>
               </tr>
   
            </tbody>
         </table>
      </div>
      <div class="tab-pane fade" id="nav-fireandsafety" role="tabpanel" aria-labelledby="nav-fireandsafety-tab">
         <table id="fireandsafety" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>Service</th>
               <th>Name</th>
               <th>Contact Number</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($emergency as $emer)
               @if ($emer->service == "fire and safety" || $emer->service == "Fire and Safety")
               <tr>
                  <th>{{ $emer->service}}</th>
                  <th>{{ $emer->name}}</th>
                  <th>{{ $emer->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy',$emer->id]]) }}
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
      <div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab">
         <table id="security" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>Service</th>
               <th>Name</th>
               <th>Contact Number</th>
               @if(!Auth::guest())
               <th>Update</th>
               <th>Delete</th>
               @endif
            </thead>
            <tbody>
               @foreach($emergency as $emer)
               @if ($emer->service == "service" || $emer->service == "Security")
               <tr>
                  <th>{{ $emer->service}}</th>
                  <th>{{ $emer->name}}</th>
                  <th>{{ $emer->contact}}</th>
                  @if(!Auth::guest())
                  <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy',$emer->id]]) }}
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
      <div class="tab-pane fade show active" id="nav-nurse" role="tabpanel" aria-labelledby="nav-nurse-tab">
         <table id="nurse" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <th>Location</th>
               <th>Name</th>
               <th>Date</th>
               <th>Time</th>
            </thead>
            <tbody>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>Ms Ann B Sam</th>
                  <th>26/09/18</th>
                  <th>12:00 pm to 8:00pm</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>M Surya M Nair</th>
                  <th>26/09/18</th>
                  <th>12:00 pm to 8:00pm</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>Ms Anju T Nair</th>
                  <th>26/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>Ms Sreelakshmi MV</th>
                  <th>26/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>Ms Ann B Sam</th>
                  <th>27/09/18</th>
                  <th>8:00am to 8:00pm</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>M Surya M Nair</th>
                  <th>27/09/18</th>
                  <th>8:00am to 8:00pm</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>Ms Anju T Nair</th>
                  <th>27/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Amritapuri main Clinic (Amrita Kripa hospital)</th>
                  <th>Ms Sreelakshmi MV</th>
                  <th>27/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Ms Ashna Martin</th>
                  <th>26/09/18</th>
                  <th>12:00pm to 8:00pm</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Mr Dinoj Vincent</th>
                  <th>26/09/18</th>
                  <th>12:00pm to 8:00pm</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Ms Rakhi Raj</th>
                  <th>26/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Mr Sidharth</th>
                  <th>26/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Ms Ashna Martin</th>
                  <th>27/09/18</th>
                  <th>8:00am to 8:00pm</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Mr Dinoj Vincent</th>
                  <th>27/09/18</th>
                  <th>8:00am to 8:00pm</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Ms Rakhi Raj</th>
                  <th>27/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Program site main Clinic</th>
                  <th>Mr Sidharth</th>
                  <th>27/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Stage Clinic</th>
                  <th>Sruthy Raveendran</th>
                  <th>26/09/18</th>
                  <th>12:00pm to 8:00pm</th>
               </tr>
               <tr>
                  <th>Stage Clinic</th>
                  <th>Sreevidya Ramesh</th>
                  <th>26/09/18</th>
                  <th>8:00pm to 8:00am</th>
               </tr>
               <tr>
                  <th>Stage Clinic</th>
                  <th>Sruthy Raveendran</th>
                  <th>27/09/18</th>
                  <th>8:00am to 8:00pm</th>
               </tr>
               <tr>
                  <th>Stage Clinic</th>
                  <th>Sreevidya Ramesh</th>
                  <th>27/09/18</th>
                  <th>8:00am to 8:00am</th>
               </tr>
            </tbody>
         </table>
         

      </div>
   </div>
</div>

@endsection
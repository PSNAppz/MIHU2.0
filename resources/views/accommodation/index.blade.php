@extends('layouts.default') @section('content')
<br> 
<div class="container">
   <script>
      $(document).ready( function () {
       $('#devotees').DataTable();
       $('#students').DataTable();
      
      } );
   </script>
   <script>
      window.Laravel = <?php echo json_encode([
         'csrfToken' => csrf_token(),
         ]); ?>
   </script>
   <style type="text/css">
      body{
      color:white;
      }
   </style>
   <h2 class="display-4" style="color:white;">Accommodation Details</h2>
   <br>
   <div class="row">
      <div class="col-3">
         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-devotees-tab" data-toggle="pill" href="#v-pills-devotees" role="tab" aria-controls="v-pills-devotees" aria-selected="true">Devotees</a>
            <a class="nav-link" id="v-pills-students-tab" data-toggle="pill" href="#v-pills-students" role="tab" aria-controls="v-pills-students" aria-selected="false">Students</a>
         </div>
      </div>
      <div class="col-9">
         <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-devotees" role="tabpanel" aria-labelledby="v-pills-devotees-tab">
               <table id="devotees" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
            <div class="tab-pane fade" id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
               <table id="students" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
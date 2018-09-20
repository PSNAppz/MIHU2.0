@extends('layouts.default') @section('content')
<br> 
<div class="container">
   <script>
      $(document).ready( function () {
       $('#example').DataTable();
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
   <center>
      <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;color:white;">
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
   </center>
</div>
@endsection
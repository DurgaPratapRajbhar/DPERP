@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Employee List</h3></center>
        </div><br><br>
<!-- **Header section end -->





      <form class="form-horizontal" name="edit_employee_master" id="edit_employee_master"  method="post">
              {{csrf_field()}}






<div class="container">
<div class="table-responsive">
  
  <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="otp-details-id_info" style=" border: 1px black font-size: normal;">
        <thead>
      
    <tr style="background-color: #87CEFA;border: 1px ridge black;">  
            <th style="border:1px ridge black;">Sr.No</th>
            <th style="border:1px ridge black;">Employee Name</th>
            <th style="border:1px ridge black;">EmpCode</th>
            <th style="border:1px ridge black;">Company</th>
            <th style="border:1px ridge black;">Email</th>
            <th style="border:1px ridge black;">Department</th>
            <th style="border:1px ridge black;">Reporting Emp</th>
            <th style="border:1px ridge black;">EmpId</th>
            <th style="border:1px ridge black;">Actions</th>
    </tr>
  </thead>

        <tbody>
           @foreach($smsdata as $val)
        <tr>
              <td style="border:1px ridge black;">{{ $no++ }}</td>
              <td style="border:1px ridge black;">{{$val->Emp_Name}}</td>
              <td style="border:1px ridge black;">{{$val->Emp_Code}}</td>
              <td style="border:1px ridge black;">{{$val->Company_Id}}</td>
              <td style="border:1px ridge black;">{{$val->Email_Id}}</td>
              <td style="border:1px ridge black;">{{$val->Department_Name}}</td>
              <td style="border:1px ridge black;">{{$val->Reporting_emp}}</td>
              <td style="border:1px ridge black;">{{$val->EmpId}}</td>
              <td style="border:1px ridge black;"><a class="btn btn-primary" href="edit-employe-list/{{ $val->EmpId }}" class="btn btn -success">Edit</a></td>
        </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</form>
</div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection




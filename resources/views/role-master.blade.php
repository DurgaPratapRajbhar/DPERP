@extends('include.master')
@section('content')
 <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Role Master</h3></center>
        </div><br><br>
<!-- **Header section end -->
            


       <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}
              <div class="form-group">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Role&nbsp;Name:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="Break_Type" name="Break_Type"  value="" placeholder="Enter a Role Name" style="margin-left: -15%;" required>
                </div>
              <div class="col-sm-4">
              </div><br>

                
              <div class="col-sm-4">
              </div><br><br>

                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
                </div>
                <div class="col-sm-4">
                  <label><input type="checkbox" id="Is_Active" name="Is_Active" value="" style="zoom:1.5;" /></label>
                </div>
                 <div class="col-sm-4">
                 </div><br><br>
                <center>
                  <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                <input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                </center>
              </div><br><br>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="container">
<div class="table-responsive">
  
  <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="otp-details-id_info" style=" border: 1px black font-size: normal;">
    <thead>
         <tr style="background-color: #87CEFA;border: 1px ridge black;">
                <th style="border:1px ridge black;">Role Id</th>
                <th style="border:1px ridge black;">Role Name</th>
                <th style="border:1px ridge black;">Is_Active</th>
            </tr>

            </thead>
            <tbody>
           
              <tr>
                <td style="border:1px ridge black;"></td>
                <td style="border:1px ridge black;"></td>
                <td style="border:1px ridge black;"></td>
            </tr>
     
      </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div>






@endsection
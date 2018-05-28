@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Break Master</h3></center>
        </div><br><br>
<!-- **Header section end -->
            


       <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}
              <div class="form-group">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Break&nbsp;Type:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="Break_Type" placeholder="Enter a Break Type" name="Break_Type"  value="" style="margin-left: -15%;">
                </div>
              <div class="col-sm-4">
              </div><br><br>

                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Time:</label>
                </div>
                <div class="col-sm-4">
                  <select  class="form-control" id="Time" name="Time" style="margin-left: -15%;">
                    <option disabled selected  value="0">Select&nbsp;Time</option>
                    <option value="1">13:00</option>
                    <option value="2">16:00</option>
                  </select>
                </div>
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
                <th style="border:1px ridge black;">Break Type</th>
                <th style="border:1px ridge black;">Time</th>
                <th style="border:1px ridge black;">Is_Active</th>
                <th style="border:1px ridge black;">Created On</th>
            </tr>

            </thead>
            <tbody>
              @foreach($smsdata as $val)
              <tr>
                <td style="border:1px ridge black;">{{$val->Break_Type}}</td>
                <td style="border:1px ridge black;">{{$val->Time}}</td>
                <td style="border:1px ridge black;">{{$val->Is_Active}}</td>
                <td style="border:1px ridge black;">{{$val->Created_On}}</td>
              </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div>
     
@endsection


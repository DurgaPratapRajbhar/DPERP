@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
           <center><h3 style="color: #0099FF;">Lead Status Master</h3></center>
        </div><br><br><br>
<!-- **Header section end -->
        



             <form class="form-horizontal" name="leadstatus_master" id="leadstatus_master"  method="post">
              {{csrf_field()}}
                <div class="form-group">
                      	<div class="col-sm-2">
                        </div>
                          <div class="col-sm-2">
                      <label for="name" class="col-lg-4 control-label">Lead&nbsp;Status:</label>
                    </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="Lead_Status" name="Lead_Status"  value="" placeholder="Enter a Lead Status" style="margin-left: -15%;">
                      </div>
                    <div class="col-sm-4">
                    </div><br><br><br>

                      
                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-2">
                    <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
                  </div>
                  <div class="col-sm-4">
                    <label><input type="checkbox" id="Is_Active" name="Is_Active" value="Yes" style="zoom:1.5;" /></label>
                  </div>
                  <div class="col-sm-4">
                  </div> <br><br>
                 <center>
          <div class="col-sm-12">
             <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>
                <br><br><br>
              </div>



<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="container">
<div class="table-responsive">
  
  <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="otp-details-id_info" style=" border: 1px solid black;">
        <thead>
          
          <tr style="background-color: #87CEFA;border: 1px solid black;">
            <th style=" border: 1px solid black;">Lead Status Id</th>
            <th style=" border: 1px solid black;">Lead Status</th>
            <th style=" border: 1px solid black;">Is Active</th>
            <th style=" border: 1px solid black;">Created On</th>
          </tr>
        </thead>

        <tbody >     
           @foreach($users as $val)
        <tr>
            <td style=" border: 1px solid black;">{{$val->Lead_Status_Id}}</td>
            <td style=" border: 1px solid black;">{{$val->Lead_Status}}</td>
            <td style=" border: 1px solid black;">{{$val->Is_Active}}</td>
            <td style=" border: 1px solid black;">{{$val->Created_On}}</td>           
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

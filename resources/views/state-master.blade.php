@extends('include.master')
@section('content')
<div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">State Master</h3></center>
        </div><br><br><br>
<!-- **Header section end -->



<form class="form-horizontal" name="state_master" id="state_master"  method="post">
                {{csrf_field()}}
            <div class="form-group">
            	<div class="col-sm-2">
             </div>
             <div class="col-sm-2">
            <label for="name" class="col-lg-4 control-label">State&nbsp;Name:</label>
          </div>
            <div class="col-sm-4">
             <input type="text" class="form-control" id="state_name" name="state_name"  value="" placeholder="Enter a State Name" style="margin-left: -15%;">
           </div>
           <div class="col-sm-4">
          </div><br><br>

          <div class="col-sm-2">
          </div>
          <div class="col-sm-2">
            <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
           </div>
            <div class="col-sm-4">
         	<label><input type="checkbox" id="Is_active" name="Is_active" style="zoom:1.5;" /></label>
         </div>
         <div class="col-sm-4">
         </div> <br><br>
        <center>
          <div class="col-sm-12">
             <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>
        <br><br><br>



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
			<th style="border:1px ridge black;">State Id</th>
      <th style="border:1px ridge black;">State Name</th>
      <th style="border:1px ridge black;">Is Active</th>
		</tr>
  </thead>
  <tbody>

       @foreach($smsdata as $val)
     <tr>
            <td style="border:1px ridge black;">{{$val->state_id}}</td>
            <td style="border:1px ridge black;">{{$val->state_name}}</td>
            <td style="border:1px ridge black;">{{$val->Is_Active}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</form>
</div>
</div>
@endsection
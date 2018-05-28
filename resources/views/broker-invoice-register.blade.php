@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Broker Invoice Register</h3></center>
        </div><br><br>
       <!-- **Header section end -->



       <form>
       	        <div class="row">
              	<div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Form&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<!-- <input type="text" name="task_date" class="date" /> -->
                	<input type="Date" class="form-control" value="<?php echo date('Y-m-d');?>" placeholder="date" id="companyname" name="companyname" style="margin-left: -40%;">

                	<!-- <input type="date" value="<?php //echo date('Y-m-d');?>"> -->
                </div>

                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">To&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="Date"  class="form-control" id="companyname" name="companyname" value="<?php echo date('Y-m-d');?>" style="margin-left: -40%;">
                </div><br><br><br>


                <center><button type="submit" id="sub" class="btn btn-primary">Show Report</button></center><br><br><br>


            </div>
        </form>
    </div>
</div>
@endsection
@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Broker Invoice</h3></center>
        </div><br><br>
       <!-- **Header section end -->



       <form>
       	        <div class="row">
              	<div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Form&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                </div>

                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">To&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="Date"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>


                <center><button type="submit" id="sub" class="btn btn-primary">Create</button></center><br><br><br>






                   	<div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Invoice&nbsp;No:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text" class="form-control" id="companyname" readonly="readonly" name="companyname" style="margin-left: -40%;">
                </div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Invoice&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text"  class="form-control" id="companyname" readonly="readonly" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>





                 	<div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Client&nbsp;Name:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                	<option disabled selected  value="0">Select One</option>
                       	</select>
                </div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Lone&nbsp;Ac.No:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text"  class="form-control" id="companyname" readonly="readonly" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>



                <div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Bank:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                	<option disabled selected  value="0">Select One</option>
                       	</select>
                </div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Address:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>



                <div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Month:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                	<option disabled selected  value="0">Select One</option>
                       	</select>
                </div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Year:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text"  class="form-control" readonly="readonly" id="companyname" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>



                 <div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Business&nbsp;Head:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                	<option disabled selected  value="0">Select One</option>
                       	</select>
                </div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Payout&nbsp;%:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text"  class="form-control" readonly="readonly" id="companyname" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>



                 <div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Service&nbsp;Tax Applicable:</label>
                </div>
                <div class="col-sm-2">
                	<label for="one">Yes</label>
                	<input type="radio" id="one" name="first_item" value="1" />
                	<label for="two">No</label>
                	<input type="radio" id="two" name="first_item" value="2" /> 
                	
                </div><br><br><br>


                 <div class="col-sm-2"></div>
                   	<div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Disbursed&nbsp;Amt:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                
                </div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Payout&nbsp;Amt:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text"  class="form-control"  id="companyname" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>







                </div>

            </form>

        </div>
    </div>








@endsection
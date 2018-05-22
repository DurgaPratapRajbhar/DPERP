@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Daily Planning</h3></center>
        </div><br><br>
       <!-- **Header section end -->

       <form>
       	<div class="row">
              	<div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="Date" class="form-control" value="<?php echo date('Y-m-d');?>" placeholder="date" id="companyname" name="companyname" style="margin-left: -40%;">
                	 </div>
                	 <div class="col-sm-6"></div><br><br><br>


                	 <div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Start&nbsp;Time:</label>
                </div>
                <div class="col-sm-2">
                	<select type="Date" class="form-control" placeholder="date" id="companyname" name="companyname" style="margin-left: -40%;">
                		<option value="-1">Select</option>
	                    <option value="09:00:00">09:00:00</option>
	                    <option value="09:15:00">09:15:00</option>
	                    <option value="09:30:00">09:30:00</option>
	                    <option value="09:45:00">09:45:00</option>
	                    <option value="10:00:00">10:00:00</option>
	                    <option value="10:15:00">10:15:00</option>
	                    <option value="10:30:00">10:30:00</option>
	                    <option value="10:45:00">10:45:00</option>
	                    <option value="11:00:00">11:00:00</option>
	                    <option value="11:15:00">11:15:00</option>
	                    <option value="11:30:00">11:30:00</option>
	                    <option value="11:45:00">11:45:00</option>
	                    <option value="12:00:00">12:00:00</option>
	                    <option value="12:15:00">12:15:00</option>
	                    <option value="12:30:00">12:30:00</option>
	                    <option value="12:45:00">12:45:00</option>
	                    <option value="13:00:00">13:00:00</option>
	                    <option value="13:15:00">13:15:00</option>
	                    <option value="13:30:00">13:30:00</option>
	                    <option value="13:45:00">13:45:00</option>
	                    <option value="14:00:00">14:00:00</option>
	                    <option value="14:15:00">14:15:00</option>
	                    <option value="14:30:00">14:30:00</option>
	                    <option value="14:45:00">14:45:00</option>
	                    <option value="15:00:00">15:00:00</option>
	                    <option value="15:15:00">15:15:00</option>
	                    <option value="15:30:00">15:30:00</option>
	                    <option value="15:45:00">15:45:00</option>
	                    <option value="16:00:00">16:00:00</option>
	                    <option value="16:15:00">16:15:00</option>
	                    <option value="16:30:00">16:30:00</option>
	                    <option value="16:45:00">16:45:00</option>
	                    <option value="17:00:00">17:00:00</option>
	                    <option value="17:15:00">17:15:00</option>
	                    <option value="17:30:00">17:30:00</option>
	                    <option value="17:45:00">17:45:00</option>
	                    <option value="18:00:00">18:00:00</option>
	                    <option value="18:15:00">18:15:00</option>
	                    <option value="18:30:00">18:30:00</option>
	                    <option value="18:45:00">18:45:00</option>
	                    <option value="19:00:00">19:00:00</option>
	                    <option value="19:15:00">19:15:00</option>
	                    <option value="19:30:00">19:30:00</option>
	                    <option value="19:45:00">19:45:00</option>
	                    <option value="20:00:00">20:00:00</option>
	                    <option value="20:15:00">20:15:00</option>
	                    <option value="20:30:00">20:30:00</option>
	                    <option value="20:45:00">20:45:00</option>
	                    <option value="21:00:00">21:00:00</option>
                	</select>
                </div>

                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">End&nbsp;Time:</label>
                </div>
                <div class="col-sm-2">
                	<select type="Date"  class="form-control" id="companyname" name="companyname"  style="margin-left: -40%;">
                		<option value="-1">Select</option>
	                    <option value="09:00:00">09:00:00</option>
	                    <option value="09:15:00">09:15:00</option>
	                    <option value="09:30:00">09:30:00</option>
	                    <option value="09:45:00">09:45:00</option>
	                    <option value="10:00:00">10:00:00</option>
	                    <option value="10:15:00">10:15:00</option>
	                    <option value="10:30:00">10:30:00</option>
	                    <option value="10:45:00">10:45:00</option>
	                    <option value="11:00:00">11:00:00</option>
	                    <option value="11:15:00">11:15:00</option>
	                    <option value="11:30:00">11:30:00</option>
	                    <option value="11:45:00">11:45:00</option>
	                    <option value="12:00:00">12:00:00</option>
	                    <option value="12:15:00">12:15:00</option>
	                    <option value="12:30:00">12:30:00</option>
	                    <option value="12:45:00">12:45:00</option>
	                    <option value="13:00:00">13:00:00</option>
	                    <option value="13:15:00">13:15:00</option>
	                    <option value="13:30:00">13:30:00</option>
	                    <option value="13:45:00">13:45:00</option>
	                    <option value="14:00:00">14:00:00</option>
	                    <option value="14:15:00">14:15:00</option>
	                    <option value="14:30:00">14:30:00</option>
	                    <option value="14:45:00">14:45:00</option>
	                    <option value="15:00:00">15:00:00</option>
	                    <option value="15:15:00">15:15:00</option>
	                    <option value="15:30:00">15:30:00</option>
	                    <option value="15:45:00">15:45:00</option>
	                    <option value="16:00:00">16:00:00</option>
	                    <option value="16:15:00">16:15:00</option>
	                    <option value="16:30:00">16:30:00</option>
	                    <option value="16:45:00">16:45:00</option>
	                    <option value="17:00:00">17:00:00</option>
	                    <option value="17:15:00">17:15:00</option>
	                    <option value="17:30:00">17:30:00</option>
	                    <option value="17:45:00">17:45:00</option>
	                    <option value="18:00:00">18:00:00</option>
	                    <option value="18:15:00">18:15:00</option>
	                    <option value="18:30:00">18:30:00</option>
	                    <option value="18:45:00">18:45:00</option>
	                    <option value="19:00:00">19:00:00</option>
	                    <option value="19:15:00">19:15:00</option>
	                    <option value="19:30:00">19:30:00</option>
	                    <option value="19:45:00">19:45:00</option>
	                    <option value="20:00:00">20:00:00</option>
	                    <option value="20:15:00">20:15:00</option>
	                    <option value="20:30:00">20:30:00</option>
	                    <option value="20:45:00">20:45:00</option>
	                    <option value="21:00:00">21:00:00</option>
                	</select>
                </div><br><br><br>



                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Remark:</label>
                </div>

                <div class="col-sm-6">
                	<textarea style="height:100px;width:610px;margin-left: -12%;"></textarea>
                </div>
                <div class="col-sm-2"></div><br><br><br><br><br>



                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Achievement:</label>
                </div>
                <div class="col-sm-6">
                	<textarea style="height:100px;width:610px;margin-left: -12%;"></textarea>
                </div>
                <div class="col-sm-2"></div><br><br><br><br><br>




                 <center>
                  <input type="submit" name="Button" id="Button" class="btn btn-primary">
                  <input type="reset" value="Reset" class="btn btn-primary">
                  </center><br><br><br>

              </div>
        </form>
    </div>
</div>





        @endsection
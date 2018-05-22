@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Lead Capture</h3></center>
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

                	
                	  <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Name:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text" class="form-control"   id="companyname" name="companyname" placeholder="Enter a Name" style="margin-left: -40%;">
                	 </div>
                	 <div class="col-sm-2"></div><br><br>





                	  <div class="col-sm-2"></div>
                	  <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Email&nbsp;Id:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text" class="form-control"  id="companyname" name="companyname" placeholder="Enter Email Id" style="margin-left: -40%;" required>
                	 </div>

                	
                	  <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Mobile.No.:</label>
                </div>
                <div class="col-sm-2">
                	<input type="text" class="form-control"  id="companyname" name="companyname" placeholder="Enter Mobile No" style="margin-left: -40%;">
                	 </div>
                	 <div class="col-sm-2"></div><br><br>




                	 <div class="col-sm-2"></div>
                	  <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp;City:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control"  id="companyname" name="companyname" style="margin-left: -40%;">
                	<option>select</option>
                     @foreach($lead as $lead)
                       <option value="{{$lead->City_Id}}">{{$lead->City_Name}}</option>
                       @endforeach 
                	</select>
                </div>

                	
                <div class="col-sm-2">
                <lable for="companyname" class="col-lg-4 col-sm-12 control-label">Company&nbsp;Name:</label>
                </div>

                <div class="col-sm-2">
                	<input type="text" class="form-control"  id="companyname" name="companyname" placeholder="Enter a Company Name" style="margin-left: -40%;">
                </div>
                	 <div class="col-sm-2"></div><br><br>


                	 <div class="col-sm-2"></div>
                	  <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp; Profession:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control"  id="companyname" name="companyname" style="margin-left: -40%;">
                	<option>select</option>
                	 @foreach($users as $user)
                       <option value="{{$user->Profession_id}}">{{$user->Profession_Name}}</option>
                       @endforeach 
                	</select>
                </div>

                	
                	  <div class="col-sm-2">
                	<lable for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp;TieUp:</label>
                		
                </div>
                <div class="col-sm-2" style="margin-left: -5%;">
                	<label for="one">Customer</label>
                	<input type="radio" id="one" name="first_item" value="1" />
                	<label for="two">Broker</label>
                	<input type="radio" id="two" name="first_item" value="2" />
                </div>
                	 <div class="col-sm-2"></div><br><br><br>




                	  <div class="col-sm-2"></div>
                	  <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp;Vertical:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control"  id="companyname" name="companyname" style="margin-left: -40%;">
                	<option>select</option>
                	 @foreach($selects as $select)
                       <option value="{{$select->Vertical_Id}}">{{$select->Vertical_Name}}</option>
                       @endforeach 
                	</select>
                </div>

                	
                	  <div class="col-sm-2">
                	<lable for="companyname" class="col-lg-4 col-sm-12 control-label">Assign&nbsp;To&nbsp;*:</label>
                		
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control"  id="companyname" name="companyname" style="margin-left: -40%;">
                		<option>Select</option>
                	</select>
                </div>
                	 <div class="col-sm-2"></div><br><br>





                	  <div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Remark:</label>
                </div>

                <div class="col-sm-2">
                	<textarea style="height:70px;width:200px;margin-left: -40%;"></textarea>
                </div>


                 <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Call&nbsp;Type:</label>
                	</div>
                <div class="col-sm-2" style="margin-left: -5%;">
                	<label for="one">Calling</label>
                	<input type="radio" id="one" name="first_item" value="1" />
                	<label for="two">Field Visit</label>
                	<input type="radio" id="two" name="first_item" value="2" />
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
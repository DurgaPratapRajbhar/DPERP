@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">RBA Registration Report</h3></center>
        </div><br><br>
       <!-- **Header section end -->
       <form>
       	<div class="row">
       		<div class="col-sm-2"></div>
       		<div class="col-sm-2">
       			<label for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp;Period:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control" id="LeadType" name="LeadType" style="margin-left: -40%;">
                		<option disabled selected  value="0">Select One</option>
                	    <option value="HL">Daywise</option>
                        <option value="WB">Specific Period</option>
                    </select>
                </div>


                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Company:</label>
                </div>
                <div class="col-sm-2">
                	<select type="text" class="form-control"   id="companyname" name="companyname" style="margin-left: -40%;">
                		@foreach($users as $user)
                		<option value="{{$user->Company_Id}}">{{$user->Company_Name}}</option>
                	@endforeach
                </select>
            </div><br><br>


            <div class="col-sm-2"></div>
            <div class="col-sm-2">
            	<div  id="last_nm">
            		<label for="credit_invoice" id="weburl"  name="weburl"  class="col-lg-4 col-sm-12 control-label">Form&nbsp;Date:</label>
            	</div>
            </div>
            <div class="col-sm-2">
            	<input type="date"  class="form-control" value="<?php echo date('Y-m-d');?>" id="credit_invoice" name="credit_invoice" style="margin-left: -40%;">
            </div>
            <div  id="first_nm">
            	<label  for="credit_invoice" style="display: none;margin-left: -32%;"  id="webtitle" name="webtitle"  class="col-lg-4 col-sm-12 control-label">Select&nbsp;Date:</label>
            </div>

            <div  id="middle_nm">
            	<div class="col-sm-2">
            		<label for="to_date" class="col-lg-4 col-sm-12 control-label">To&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="Date"  class="form-control" value="<?php echo date('Y-m-d');?>" id="to_date" name="to_date" style="margin-left: -40%;">
                </div>
            </div><br><br><br>

            <div style="display: none" id="time">
            	<div class="col-sm-2"></div>
            	<div class="col-sm-2">
            	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Start&nbsp;Time:</label>
            </div>
            <div id="start_time">
            	<div class="col-sm-2">
            		<select type="Date" class="form-control" id="start_time1" name="start_time1" style="margin-left: -40%;">
            			<option selected="selected" value="-1">Select One</option>
		                <option value="8:00">8:00</option>
		                <option value="9:00">9:00</option>
		                <option value="10:00">10:00</option>
		                <option value="11:00">11:00</option>
		                <option value="12:00">12:00</option>
		                <option value="13:00">13:00</option>
		                <option value="14:00">14:00</option>
		                <option value="15:00">15:00</option>
		                <option value="16:00">16:00</option>
		                <option value="17:00">17:00</option>
		                <option value="18:00">18:00</option>
		                <option value="19:00">19:00</option>
		                <option value="20:00">20:00</option>
		                <option value="21:00">21:00</option>
		                <option value="22:00">22:00</option>
		                <option value="23:00">23:00</option>
		            </select>
		        </div>
		        <div class="col-sm-2">
		        	<label for="companyname" class="col-lg-4 col-sm-12 control-label">End&nbsp;Time:</label>
		        </div>
		        <div class="col-sm-2">
		        	<select type="text"  class="form-control" id="end_time2" name="end_time2" style="margin-left: -40%;">
                       	<option selected="selected" value="-1">Select One</option>
		                <option value="8:00">8:00</option>
		                <option value="9:00">9:00</option>
		                <option value="10:00">10:00</option>
		                <option value="11:00">11:00</option>
		                <option value="12:00">12:00</option>
		                <option value="13:00">13:00</option>
		                <option value="14:00">14:00</option>
		                <option value="15:00">15:00</option>
		                <option value="16:00">16:00</option>
		                <option value="17:00">17:00</option>
		                <option value="18:00">18:00</option>
		                <option value="19:00">19:00</option>
		                <option value="20:00">20:00</option>
		                <option value="21:00">21:00</option>
		                <option value="22:00">22:00</option>
		                <option value="23:00">23:00</option>
                     </select>
                 </div>
             </div>
         </div><br><br><br>

         <center><button type="submit" id="sub" class="btn btn-primary">Generate Report</button></center><br><br><br>
     </div>
 </form>
</div>
</div>

           






<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
  $("#weburl").hide();
  $("#last_nm").hide();

  $("#webtitle").show();
  $("#first_nm").show();

  $("#middle_nm").hide();
  $("#to_date").hide();
  
  }
  else{
 $("#weburl").show();
 $("#last_nm").show();
  $("#webtitle").hide();
  $("#first_nm").hide();
  $("#middle_nm").show();
  $("#to_date").show();
  }
  });
</script>



<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
 

  $("#time").show();
  $("#start_time").show();
  // $("#middle_nm").hide();
  // $("#to_date").hide();
  
  }
  else{

  $("#time").hide();
  $("#start_time").hide();
  // $("#middle_nm").hide();
  // $("#to_date").hide();
  }
  });
</script>






@endsection
@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3>Invoice</h3></center>
        </div><br><br>
       <!-- **Header section end -->


       <form>

        <div class="row">
              	<div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="fromdate" class="col-lg-4 col-sm-12 control-label">Form&nbsp;Date:</label>
                </div>
                <div class="col-sm-2" >
                	<input type="Date" class="form-control" id="fromdate" name="fromdate" style="margin-left: -40%;">
                </div>

                <div class="col-sm-2">
                	<label for="companyname" class="col-lg-4 col-sm-12 control-label">To&nbsp;Date:</label>
                </div>
                <div class="col-sm-2">
                	<input type="Date"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                </div><br><br><br>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                	<label for="invoice" class="col-lg-4 col-sm-12 control-label">Invoice&nbsp;/Credit Note:</label>
                </div>

                <div class="col-sm-2">
                	<select type="text" class="form-control" id="LeadType" name="LeadType" style="margin-left: -40%;">
                	  <option disabled selected  value="0">Select One</option>
                	  <option value="HL">Invoice</option>
                      <option value="WB">Credit Note</option>
                       </select>
                   </div>

                      <div  id="last_nm">
                    <label for="credit_invoice" id="weburl" name="weburl"  class="col-lg-4 col-sm-12 control-label">invoice:</label>

                   </div>

                   <div  id="first_nm">
                    
                   	<label  style="display: none" for="credit_invoice" id="webtitle" name="webtitle"  class="col-lg-4 col-sm-12 control-label">Credit&nbsp;Note Date:</label>
                   </div>
                  

          <div class="col-sm-2">
       <input type="date"  class="form-control" id="credit_invoice" name="credit_invoice" style="margin-left: -160%;">
       </div><br><br><br>

<!--         <div class="col-md-4 col-xs- 12">
    <div class="mrg-btmm">
    <select id="LeadType" name="LeadType" class="selectpicker select-opt form-control" required >
    <option disabled selected value="" >Select One</option>
    <option value="HL">Invoice</option>
    <option  value="WB">Credit Note</option>
    </select>
    </div>
    </div>
    <div class="col-md-4 col-xs- 12"  >
    <div class="mrg-btmm" id="first_nm" >
    <input  type="text" class="form-control" oninput="mail('weburl')" placeholder= "Credit&nbsp;Note Date" name="weburl" id="weburl" maxlength="40" required>
    <div id="email" style="display:none; color:red;font-size:10px">Kindly Enter Correct URL</div>
    </div>
    </div>
    <div class="col-md-4 col-xs- 12">
    <div class=" mrg-btmm"  id="last_nm">
    <input  type="text" class="form-control" name="webtitle" placeholder="Credit" id="webtitle" maxlength="40" required>
    </div>
    </div> -->

                   

                   	<center><button type="submit" id="sub" class="btn btn-primary">Create</button></center><br><br><br>

                    <div class="col-sm-2"></div>
                   	<div class="col-sm-2">

                	<label for="companyname"  class="col-lg-4 col-sm-12   control-label">Invoice&nbsp;No:</label>
                </div>

              
                <div class="col-sm-2">
                  <div  id="active_no">
                	<input type="text" class="form-control" id="active" placeholder=" Enter a Invoice No" name="active" style="margin-left: -40%;">
                </div>
              </div>

                <div class="col-sm-2">
                  <div  id="credite_no">
                  <input type="text"   disabled="disabled" class="form-control" id="create" name="create" style="margin-left: -157%;display: none;">
                </div>
              </div>

                <div class="col-sm-2">
                	<label for="companyname" style="margin-left: -109%; class="col-lg-4 col-sm-12 control-label">Credite&nbsp;Note&nbsp;No:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" placeholder="Enter a Credite Note No" style="margin-left: -157%;">
                       </div><br><br><br>



                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Select&nbsp;/Debtor:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       		<option disabled selected  value="0">Select One</option>
                           @foreach($selects as $select)
                       <option value="{{$select->Bank_Id}}">{{$select->Bank_Name}}</option>
                       @endforeach 
                       	</select>
                       </div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Debtor&nbsp;Address:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" placeholder="Enter a Address" style="margin-left: -40%;">
                       </div><br><br><br>





                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Debtor&nbsp;GST&nbsp;State:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       		<option disabled selected  value="0">Select One</option>
                          @foreach($users as $user)
                       <option value="{{$user->state_id}}">{{$user->state_name}}</option>
                       @endforeach 
                       	</select>
                       </div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Debtor&nbsp;GST&nbsp;No:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" placeholder="Enter a Debtor GST No" style="margin-left: -40%;">
                       </div><br><br><br>




                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss&nbsp;Bank Name:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       		<option disabled selected  value="0">Select One</option>
                       	</select>
                       </div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss&nbsp;Bank A/c.No:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" placeholder="Enter a Bank A/c.No" style="margin-left: -40%;">
                       </div><br><br><br>




                        <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss&nbsp;IFSC Code:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter IFSC Code" style="margin-left: -40%;">
                       </div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss&nbsp;office Address:</label>
                       </div>
                       <div class="col-sm-2">
                       	<textarea type="text"  class="form-control" id="companyname" name="companyname" placeholder="Enter a Office Address" style="margin-left: -40%;"></textarea> 
                       </div><br><br><br>



                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss&nbsp;GST State:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       		<option disabled selected  value="0">Select One</option>
                       	</select>
                       </div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss&nbsp;GST. No:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" placeholder="Enter GST.No" style="margin-left: -40%;">
                       </div><br><br><br>





                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Supplier's&nbsp;Ref.No:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter a Ref.No" style="margin-left: -40%;">
                       </div> <br><br><br>	




                         <div class="box-header with-border">
                         	<center><h4>Select Client</h4></center>
                         </div><hr><br><br>





                         <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Client&nbsp;Name:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       		<option disabled selected  value="0">Select One</option>
                       	</select>
                       </div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Lead&nbsp;Id:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	<option disabled selected  value="0">Select One</option>
                       </select>
                       </div><br><br><br>


                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Bank:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Disbursed&nbsp;Amt:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	<option disabled selected  value="0">Select One</option>
                       </select>
                       </div><br><br><br>




                        <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Bank:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Client&nbsp;Name&nbsp;as per&nbsp;Bank:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       </div><br><br><br>


                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">	
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Payout&nbsp;%:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Loan&nbsp;Account No:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       </div><br><br><br>


                       <div class="col-sm-2"></div>
                       <div class="col-sm-2"><label for="companyname" class="col-lg-4 col-sm-12 control-label">Rupeeboss Revenue:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Product:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       </div><br><br><br>


                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Total&nbsp;Rupeeboss Revenue:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">GST&nbsp;%:</label>
                       </div>
                       <div class="col-sm-1">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -100%;">
                       </div>
                       <div class="col-sm-1">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -90%;">
                       </div><br><br><br>


                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">SGST:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">CGST:</label>
                       </div>
                       <div class="col-sm-2">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       </div><br><br><br>


                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">IGST:</label>
                       </div>
                       <div class="col-sm-2">
                       	<intut type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       	</div>

                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Narration:</label>
                       </div>
                       <div class="col-sm-2" id="middle_name">
                       	<input type="text"  class="form-control" id="companyname" name="companyname" style="margin-left: -40%;">
                       </div><br><br><br>

                       <div class="col-sm-2"></div>
                       <div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Total&nbsp;Invoice Value:</label>
                       </div>
                       <div class="col-sm-2">
                       	<textarea type="Date" class="form-control" id="companyname" name="companyname" style="margin-left: -40%;"></textarea>
                       	</div>


       </div>
</form>
</div>
</div>

<!-- <script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
    $("#companyname1").hide();
  $("# middle_name").hide();
      $("#companynamenew").show();
  $("# middle_namenew").show();
  // $("#weburl").hide();
  // $("#last_nm").hide();
  // $("#webtitle").show();
  // $("#first_nm").show();
  }
  else{
  $("#companyname1").show();
  $("# middle_name").show();
 $("#companynamenew").hide();
  $("# middle_namenew").hide();
 // $("#weburl").show();
 // $("#last_nm").show();
 //  $("#webtitle").hide();
 //  $("#first_nm").hide();
  }
  });
</script>
 -->

<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
  $("#weburl").hide();
  $("#last_nm").hide();
  $("#webtitle").show();
  $("#first_nm").show();
  }
  else{
 $("#weburl").show();
 $("#last_nm").show();
  $("#webtitle").hide();
  $("#first_nm").hide();
  }
  });
</script>


<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
  $("#active").hide();
  $("#active_no").hide();
  $("#create").show();
  $("#credite_no").show();
  }
  else{
 $("#active").show();
 $("#active_no").show();
  $("#create").hide();
  $("#credite_no").hide();
  }
  });
</script>




<style type="text/css">
  .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
</style>





  @endsection

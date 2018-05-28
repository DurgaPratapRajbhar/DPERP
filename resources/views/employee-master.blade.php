@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

            <center><h3 style="color: #0099FF;">Employee Master</h3></center><hr>


     
      <div class="how-it-block1 bg-boxshadow" style=" min-height: 375px;">
        <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}

                  <div class="row">
                 <div class="col-sm-2">
                    <label for="empcoad" class="col-lg-4 col-sm-12 control-label">Employee&nbsp;Code:</label>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Enter a Employee Code" maxlength="10" style="margin-left: -15%;" required><br>
                </div>
                <div class="col-sm-1">
                </div>

              <div class="col-sm-2">
              <label for="empname" class="col-lg-4 col-sm-12 control-label">Employee&nbsp;Name:</label>
            </div>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="empname" name="empname" placeholder="Enter a Employee Name" maxlength="40" onkeypress="return AllowAlphabet(event)" style="margin-left: -15%;" required><br>
          </div>
            <div class="col-sm-1">
            </div>
          <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Company&nbsp;Name:</label>
           </div>
             <div class="col-sm-3">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -15%;" required>
         <option disabled selected  value="0">Select One</option>
          @foreach ($shows as $show)
          <option value="{{ $show->Company_Id}}">{{ $show->Company_Name}}</option>
        @endforeach
         </select><br>
          </div>
           <div class="col-sm-1">
              </div>

          <div class="col-sm-2">
            <label for="empname" class="col-lg-4 col-sm-12 control-label">Address:</label>
            </div>
           <div class="col-sm-3">
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter a Address" maxlength="100" style="margin-left: -15%;" required><br>
          </div>
          <div class="col-sm-1">
          </div>


           <div class="col-sm-2">
            <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Email&nbsp;Id:</label>
          </div>

          <div class="col-sm-3">
             <input type="text" name="email" id="email" oninput="mail('email')" style="margin-left: -15%;" class="form-control" placeholder="Email ID" required>
                    <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span><br>
                  </div>
                  <div class="col-sm-1">
                  </div>

        <div class="col-sm-2">
            <label for="dob" class="col-lg-4 col-sm-12 control-label">Date&nbsp;Birth:</label>
          </div>
          <div class="col-sm-3">
            <input id="dob" name="dob" type="date" placeholder="Date Of Birth" class="form-control" style="margin-left: -15%;" required><br>
          </div>
          <div class="col-sm-1">
          </div>

          <div class="col-sm-2">
            <label for="mobile" class="col-lg-4 col-sm-12 control-label">Mobile:</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" placeholder="Enter a Mobile" onkeypress="return fnAllowNumeric(event)"  style="margin-left: -15%;" required><br>
          </div>
          <div class="col-sm-1">
          </div>


          <div class="col-sm-2">
             <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Department:</label>
           </div>
             <div class="col-sm-3">
              <select  class="form-control" id="department" name="department" style="margin-left: -15%;" required>
                      <option disabled selected  value="">Select One</option>
                       @foreach ($insert as $insert)
                       <option value="{{ $insert->Department_Id}}">{{ $insert->Department_Name}}</option>
                     @endforeach
                
                       </select><br>
              </div>
            <div class="col-sm-1">
            </div><br><br>

            <div class="col-sm-2">
             <label for="designation" class="col-lg-4 col-sm-12 control-label">Designation:</label>
           </div>

             <div class="col-sm-3">
              <select class="form-control" id="designation" name="designation" style="margin-left: -15%;" required>
                     <option disabled selected  value="">Select One</option>
                      @foreach ($selects as $select)
                       <option value="{{ $select->Designation_Id}}">{{ $select->Designation}}</option>
                     @endforeach
                   </select><br>
              </div>
              <div class="col-sm-1">
              </div>

              <div class="col-sm-2">
             <label for="reporting_authority" style="font-family: serif; font-size: 10pt;" class="col-lg-4 col-sm-12 control-label">Reporting&nbsp;Authority:</label>
           </div>

             <div class="col-sm-3">
              <select  class="form-control" id="reporting_authority" name="reporting_authority" style="margin-left: -15%;" required>
                      <option disabled selected value="">Select One</option>
                      @foreach($users as $user)
                       <option value="{{$user->EmpId}}">{{$user->Emp_Name}}</option>
                       @endforeach 
                       </select><br>

              </div>
              <div class="col-sm-1">
              </div>

          <div class="col-sm-2">
            <label for="dat_of_joining" class="col-lg-4 col-sm-12 control-label">Dateof&nbsp;Joining:</label>
          </div>
          <div class="col-sm-3">
            <input type="date" class="form-control" id="date_of_joining" name="date_of_joining" placeholder="Enter a Doj" style="margin-left: -15%;" required><br>
          </div>
          <div class="col-sm-1"></div>

          <div class="col-sm-2">
             <label for="band" class="col-lg-4 col-sm-12 control-label">Band:</label>
           </div>
           <div class="col-sm-3">
              <select  class="form-control" id="band" name="band" style="margin-left: -15%;" required>
                      <option disabled selected  value="0">Select Band</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                     
                     </select><br>
              </div>
              <div class="col-sm-1"></div>


          <div class="col-sm-2">
           <label for="checkbox" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
          </div>
          <div class="col-sm-3">
            <div class="checkbox">
              <label><input id="active" name="active" type="checkbox" value="" style="zoom:1.5;" required></label>
            </div></div>
             <div class="col-sm-1"></div>


          <div class="col-sm-2">
          <label for="ctc" class="col-lg-4 col-sm-12 control-label">&nbsp;CTC:</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="ctc" name="ctc" value="0" placeholder="Enter a CTC" style="margin-left: -15%;" required><br>
          </div>
          <div class="col-sm-1"></div>


          <div class="col-sm-2">
            <label for="variable" class="col-lg-4 col-sm-12 control-label">&nbsp;Variable:</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="variable" name="variable" value="0" placeholder="Enter a Variable" style="margin-left: -15%;" required><br>
          </div>
          <div class="col-sm-1"></div>


        <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>

          </div>
        </form>
      </div>
      </div>
    </div>




          

<script type="text/javascript">
  var username = $('#username').val();
$('#username').change(function() {
   $.ajax({
      url: "validation.php",
      type: 'POST',
      data: 'username=' + username,
      success: function(result){
                 if(result > 0){
                     // do something if username already exist
                 }
                 else{
                     // do something if username doesn't exist
                 }
               }
      });
});
</script>





  


<script type="text/javascript">
          function mail(obj,val){
         // console.log(obj);
         if(obj=='email' ){
                        var str =$('#email').val();
                        var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                        var res = str.match(emailPattern);
                        if(res){
                          // console.log('Pancard is valid one.!!');
                           $('#email_id').hide();
     
                       }else{
                         // console.log('Oops.Please Enter Valid Pan Number.!!');
                         $('#email_id').show();
     
                         return false;
                       }
                       
       }
     }
     </script>
     <script type="text/javascript">
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
          }
</script>

<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>






@endsection

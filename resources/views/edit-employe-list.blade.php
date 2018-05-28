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
<!-- **Header section end -->


            <center><h3 style="color: #0099FF;">Edit Employee List </h3></center><hr>



            <form class="form-horizontal" name="" id=""  method="post">
              {{csrf_field()}}

                  <div class="row">
                 <div class="col-sm-2">
                    <label for="empcoad" class="col-lg-4 col-sm-12 control-label">Employee&nbsp;Code:</label>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Enter a Employee Code" maxlength="10" style="margin-left: -15%;" value="{{ $user->Emp_Code}}"><br>
                </div>
                <div class="col-sm-1">
                </div>

              <div class="col-sm-2">
              <label for="empname" class="col-lg-4 col-sm-12 control-label">Employee&nbsp;Name:</label>
            </div>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="empname" name="empname" placeholder="Enter a Employee Name" maxlength="40" style="margin-left: -15%;" value="{{ $user->Emp_Name}}"><br>
          </div>
            <div class="col-sm-1">
            </div>
          <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Company&nbsp;Name:</label>
           </div>
             <div class="col-sm-3">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -15%;" value="{{ $user->Company_Id}}">
                      <option disabled selected  value="">{{ $user->Company_Id}}</option>
                      <option value="1">Rupee Boss</option>
                      <option value="2">Policy Boss</option>
                       </select><br>
                       </div>
                        <div class="col-sm-1">
                        </div>

                      <div class="col-sm-2">
                  <label for="empname" class="col-lg-4 col-sm-12 control-label">Address:</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="address" name="address" placeholder="Enter a Address" maxlength="100" style="margin-left: -15%;" value="{{ $user->Address}}"><br>
          </div>
          <div class="col-sm-1">
          </div>


           <div class="col-sm-2">
            <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Email&nbsp;Id:</label>
          </div>

          <div class="col-sm-3">
             <input type="text" name="email" id="email" oninput="mail('email')" style="margin-left: -15%;" class="form-control" placeholder="Email ID" value="{{ $user->Email_Id}}">
                    <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span><br>
                  </div>
                  <div class="col-sm-1">
                  </div>

        <div class="col-sm-2">
            <label for="dob" class="col-lg-4 col-sm-12 control-label">Date&nbsp;Birth:</label>
          </div>
          <div class="col-sm-3">
            <input id="dob" name="dob" type="date" placeholder="Date Of Birth" class="form-control" style="margin-left: -15%;" value="{{ $user->DOB}}"><br>
          </div>
          <div class="col-sm-1">
          </div>

          <div class="col-sm-2">
            <label for="mobile" class="col-lg-4 col-sm-12 control-label">Mobile:</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" placeholder="Enter a Mobile" onkeypress="return fnAllowNumeric(event)"  style="margin-left: -15%;" value="{{ $user->Mobile}}"><br>
          </div>
          <div class="col-sm-1">
          </div>


          <div class="col-sm-2">
             <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Department:</label>
           </div>
             <div class="col-sm-3">
              <select  class="form-control" id="department" name="department" style="margin-left: -15%;" value="{{ $user->Department_Id}}">
                      <option disabled selected  value="">{{ $user->Department_Id}}</option>
                       @foreach ($insert as $insert)
                       <option value="{{ $insert->Department_Id}}">{{ $insert->Department_Name}}</option>
                     @endforeach
                       </select><br>
              </div>
            <div class="col-sm-1">
            </div><br><br>

          <!--   <div class="col-sm-2">
             <label for="designation" class="col-lg-4 col-sm-12 control-label">designation:</label>
           </div> -->
            <div class="col-sm-2">
             <label for="designation" style="font-family: serif; font-size: 10pt;" class="col-lg-4 col-sm-12 control-label">designation:</label>
           </div>

             <div class="col-sm-3">
              <select  class="form-control" id="designation" name="designation" style="margin-left: -15%;" value="{{ $user->Designation_Id}}">
                     <option disabled selected  value="">{{ $user->Designation_Id}}</option>

                      @foreach ($masters as $master)
                       <option value="{{$master->Designation_Id}}">{{$master->Designation}}</option>
                     @endforeach

                      </select><br>
              </div>
              <div class="col-sm-1">
              </div>

              <div class="col-sm-2">
             <label for="reporting_authority" style="font-family: serif; font-size: 10pt;" class="col-lg-4 col-sm-12 control-label">Reporting&nbsp;Authority:</label>
           </div>

             <div class="col-sm-3">
              <select  class="form-control" id="reporting_authority" name="reporting_authority" style="margin-left: -15%;" value="{{ $user->Reporting_Id}}">
                      <option disabled selected value="">{{ $user->Emp_Name}}</option>
                       @foreach($updates as $update)
                       <option value="{{$update->EmpId}}">{{$update->Emp_Name}}</option>
                       @endforeach 
                       </select><br>

              </div>
              <div class="col-sm-1">
              </div>

          <div class="col-sm-2">
            <label for="dat_of_joining" class="col-lg-4 col-sm-12 control-label">Dateof&nbsp;Joining:</label>
          </div>
          <div class="col-sm-3">
            <input type="date" class="form-control" id="date_of_joining" name="date_of_joining" placeholder="Enter a Doj" style="margin-left: -15%;" value="{{ $user->DOJ}}"><br>
          </div>
          <div class="col-sm-1">
          </div>

            <div class="col-sm-2">
             <label for="band" class="col-lg-4 col-sm-12 control-label">Band:</label>
           </div>
           <div class="col-sm-3">
              <select  class="form-control" id="band" name="band" style="margin-left: -15%;"" value="{{ $user->Band}}">
                      <option disabled selected  value="0">Select Band</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                     
                     </select><br>
              </div>
              <div class="col-sm-1">
              </div>


              <div class="col-sm-2">
            <label for="checkbox" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>

          </div>
          <div class="col-sm-3">
            <div class="checkbox">
              <label><input id="active" name="active" type="checkbox" value="" style="zoom:1.5;" /></label>
            </div>
        
            </div>
             <div class="col-sm-1">
             </div>


             <div class="col-sm-2">
            <label for="ctc" class="col-lg-4 col-sm-12 control-label">&nbsp;CTC:</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="ctc" name="ctc" value="0" placeholder="Enter a CTC" style="margin-left: -15%;" value="{{ $user->CTC}}"><br>
          </div>
          <div class="col-sm-1">
          </div>

          <div class="col-sm-2">
            <label for="variable" class="col-lg-4 col-sm-12 control-label">&nbsp;Variable:</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="variable" name="variable" value="0" placeholder="Enter a Variable" style="margin-left: -15%;" value="{{ $user->Variable}}"><br>
          </div>
          <div class="col-sm-1">
        </div>
         <div class="col-sm-11">
        </div>



        <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>

          <div class="col-sm-12"><br>
            <center><table cellspacing="0" cellpadding="4" rules="all" border="1" id="dgstatelist" style="color:#333333;font-family:Verdana;font-size:9pt;width:532px;border-collapse:collapse;">
            <tbody><tr style="color:White;background-color:#5D7B9D;font-weight:bold;">
              <th scope="col">UserName</th>
              <th align="center" scope="col">Pass</th>
              <th align="center" scope="col">LoginStatus</th>
              <th align="center" scope="col">Password</th>
              <th align="center" scope="col">Sysdate</th>
              <th align="center" scope="col">IP</th>
            </tr>
          </tbody>
        </table>
      </center>
    </div>
  </div>
</form>
</div>
</div>
  
@endsection
@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Menu Master</h3></center>
        </div><br><br>
<!-- **Header section end -->





      
      <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}

            <div class="row">

               <div class="col-sm-2"></div>
               <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Module&nbsp;Name:</label>
           </div>
             <div class="col-sm-2">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -30%;">
              	<option disabled selected  value="0">Select One</option>
                  @foreach ($module as $module)
          <option value="">{{ $module->Module_Name}}</option>
        @endforeach
              </select>
              </div>


              <div class="col-sm-2">
              <label for="empname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Name:</label>
          </div>
          <div class="col-sm-2">
          	<input type="text" class="form-control" id="empname" name="empname"  maxlength="40" style="margin-left: -30%;" >
          </div><br><br>


            <div class="col-sm-2"></div>
            <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Parent&nbsp;Name:</label>
           </div>
             <div class="col-sm-2">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -30%;">
              	<option disabled selected  value="0">Select One</option>
                 @foreach ($menu_parent as $menu_parent)
          <option value="">{{ $menu_parent->Menu_Parent}}</option>
        @endforeach
                 
                  </select>
              </div>


              <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Lavel:</label>
           </div>
             <div class="col-sm-2">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -30%;">
              	<option disabled selected  value="0">Select One</option>
                @foreach ($menu_level as $menu_level)
          <option value="">{{ $menu_level->Menu_Level}}</option>
        @endforeach
                
              </select>
          </div><br><br>


          <div class="col-sm-2"></div>
          <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Sequence:</label>
           </div>
             <div class="col-sm-2">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -30%;">
              	<option disabled selected  value="0">Select One</option>
                @foreach ($menu_sequence as $menu_sequence)
          <option value="">{{ $menu_sequence->Menu_Sequence}}</option>
        @endforeach
                
                  </select>
              </div>


              <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Type:</label>
           </div>
             <div class="col-sm-2">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -30%;">
              	<option disabled selected  value="0">Select One</option>
                  @foreach ($menu_type as $menu_type)
          <option value="">{{ $menu_type->Menu_Type}}</option>
        @endforeach
                 
                  </select>
             </div><br><br>


             <div class="col-sm-2"></div>
             <div class="col-sm-2">
              <label for="empname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Action:</label>
            </div>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="empname" name="empname"  maxlength="40" style="margin-left: -30%;" >
          </div>

          <div class="col-sm-2">
              <label for="empname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Display:</label>
            </div>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="empname" name="empname"  maxlength="40" style="margin-left: -30%;">
          </div>
            <div class="col-sm-2"></div><br><br><br>



          <center>
            <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
        </center>
        </div>
      </form>
    </div>
  </div>

          @endsection

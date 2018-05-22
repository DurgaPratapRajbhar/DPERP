@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Loan Disbursement</h3></center>
        </div><br><br>
<!-- **Header section end -->
            


       <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}
              <div class="form-group">



                <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Year:</label>
                </div>
                <div class="col-sm-3">
                  <select  class="form-control" id="Time" name="Time" style="margin-left: -15%;">
                    <option value="-1">--Select Year--</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                </div>


                 <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Month:</label>
                </div>
                <div class="col-sm-3">
                  <select  class="form-control" id="Time" name="Time" style="margin-left: -15%;">
                    <option value="-1">--Select Month--</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                </div><br><br><br>




                <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Business&nbsp;Head:</label>
                </div>
                <div class="col-sm-3">
                  <select  class="form-control" id="Time" name="Time" style="margin-left: -15%;">
                    <option value="-1">Select One</option>
                    <option value="RB40000459">Mahendra Thakare</option>
                    <option value="RB40000455">Sameer Naik</option>
                  </select>
                </div>


                 <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Business&nbsp;Manager:</label>
                </div>
                <div class="col-sm-3">
                  <select  class="form-control" id="Time" name="Time" style="margin-left: -15%;">
                   
                  </select>
                </div><br><br><br>




               <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Select&nbsp;Status:</label>
                </div>
                <div class="col-sm-3">
                  <select  class="form-control" id="Time" name="Time" style="margin-left: -15%;">
                    <option disabled selected  value="0">Select&nbsp;Time</option>
                    <option value="1">13:00</option>
                    <option value="2">16:00</option>
                  </select>
                </div><br><br><br>
            </div>
            <center>
                <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
              </center><br><br>
            </form>
          </div>
        </div>







              @endsection
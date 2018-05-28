@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">City Master</h3></center>
        </div><br><br>
<!-- **Header section end -->
         



      <form class="form-horizontal" name="city_master" id="city_master"  method="post">
           {{csrf_field()}}

                <div class="form-group">
                      <div class="col-sm-2">
                        </div>
                        <div class="col-sm-2">
                      <label for="name" class="col-lg-4 control-label">City&nbsp;Name:</label>
                    </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="city_name" name="city_name"  value="" placeholder="Enter a City Name" style="margin-left: -15%;">
                      </div>
                    <div class="col-sm-4">
                    </div><br><br>

                      <div class="col-sm-2">
                      </div>
                      <div class="col-sm-2">
                        <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">State:</label>
                      </div>
                      <div class="col-sm-4">
                        <select  class="form-control" id="state_id" name="state_id" style="margin-left: -15%;"" required>
                      <option disabled selected  value="0">Select One</option>
                       @foreach($users as $user)
                       <option value="{{$user->state_id}}">{{$user->state_name}}</option>
                       @endforeach 
                       </select>
                  </div>

                  <div class="col-sm-4">
                </div><br><br>
                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-2">
                    <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
                  </div>
                  <div class="col-sm-4">
                    <label><input type="checkbox" id="is_active" name="is_active" value="1" style="zoom:1.5;" /></label>
                  </div>
                  <div class="col-sm-4">
                  </div><br><br>
                  <center>
                    <input type="submit" name="Button1" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="Button1" class="btn btn-primary">
                    &nbsp;<input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                  </center>
                <br><br><br>
          </div>
           


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="container">
<div class="table-responsive">
  
  <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="otp-details-id_info" style=" border: 1px black font-size: normal;">
    <thead>
    <tr style="background-color: #87CEFA;border: 1px ridge black;">
                <th  style="border:1px ridge black;">Sr. No</th>
                <th  style="border:1px ridge black;">City name</th>
                <th  style="border:1px ridge black;">State Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($smsdata as $val)
              <tr>
                <td  style="border:1px ridge black;">{{$no++}}</td>
                <td  style="border:1px ridge black;">{{$val->City_Name}}</td>
                <td  style="border:1px ridge black;">{{$val->state_name}}</td>
              </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div>
     <!--  </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div> -->
      @endsection

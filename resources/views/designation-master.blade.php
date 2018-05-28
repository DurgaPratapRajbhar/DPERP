@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
           <center><h3 style="color: #0099FF;">Designation Master</h3></center>
        </div><br><br>
<!-- **Header section end -->


           



          <form id="demo_form" name="demo_form" method="POST" action="{{url('update_view_templete')}}"> 
                {{csrf_field()}} 

              <div class="form-group">


                <input type="hidden" name="Designation_Id"  id="Designation_Id" class="">

                  	<div class="col-sm-2">
                    </div>
                    <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Designation:</label>
                </div>

            
                  <div class="col-sm-4">
                    <input  type="text" class="form-control" id="Designation"  name="Designation" placeholder="Enter a Designation"  style="margin-left: -15%;"  required>
                  </div>
                  <div class="col-sm-4">
                  </div><br><br><br>

                  <center>
                  <input type="submit" name="Button" id="Button" class="btn btn-primary">
                  <input type="reset" value="Reset" class="btn btn-primary">
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
				        <th style="border:1px ridge black;">Select</th>
				     
				        <th style="border:1px ridge black;">Desg ID</th>
				        <th style="border:1px ridge black;">designation</th>
              </tr>
            </thead>
            <tbody>

             @foreach($smsdata as $val)
           <tr>
            <td style="border:1px ridge black;"><button type="button" onclick="demo('{{$val->Designation}}','{{$val->Designation_Id}}')" class="btn btn-link">Select</button></td>
            
            <td style="border:1px ridge black;">{{$val->Designation_Id}}</td>
            <td style="border:1px ridge black;">{{$val->Designation}}</td>
          </tr>
			  @endforeach
      </tbody>
    </table>
  </div>
</div>
  </form>
</div>
</div>
<script type="text/javascript">
  function demo(Designation,Designation_Id){
    //alert(Designation_Id);
    // document.getElementById("fba_id").value.empty();
     document.getElementById('Designation').value="";
     document.getElementById('Designation_Id').value="";
    document.getElementById("Designation").value += Designation;
    document.getElementById("Designation_Id").value += Designation_Id;

   // $('#fba_id').append(Designation);

  }
</script>

@endsection







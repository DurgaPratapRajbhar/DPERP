@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Product Master</h3></center>
        </div><br><br>
<!-- **Header section end -->
         



          <form class="form-horizontal" name="product_master" id="product_master"  method="post">
            {{csrf_field()}}
                <div class="form-group" style="size: 500px">




                  <div class="col-sm-2">
                  </div>
             
                <div class="col-sm-2">
                    <label for="empcoad" class="col-lg-4 col-sm-12 control-label">Product&nbsp;Name:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="Product_Name" name="Product_Name" placeholder="Enter a Product Name" value="" style="margin-left: -15%;" required><br>
                </div>
                <div class="col-sm-4">
                </div><br><br><br>



                <div class="col-sm-2">
                  </div>
                  <div class="col-sm-2">
                    <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
                  </div>
                  <div class="col-sm-4">
                    <label><input type="checkbox" id="Is_Active" name="Is_Active" value="Yes" style="zoom:1.5;" /></label>
                  </div>
                  <div class="col-sm-4">
                  </div><br><br>

                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-2">
                      <label for="name" class="col-lg-4 control-label">Select&nbsp;File:</label>
                    </div>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" id="Document" name="Document"  value="Yes" style="margin-left: -15%;">
                      </div>
                     <div class="col-sm-4">
                  </div><br><br><br>
                

                       <center>
          <div class="col-sm-12">
             <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>
                <br><br><br>
              </div>






<!-- <meta charset="UTF-8"> -->
<!-- <title>Data Table Example</title> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=5"> -->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
 --><!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
 -->

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
            <th style="border:1px ridge black;">Prod Id</th>
            <th style="border:1px ridge black;">Product Name</th>
            <th style="border:1px ridge black;">Is Active</th>
            <th style="border:1px ridge black;">Document</th>
            <th style="border:1px ridge black;">Created On</th>
          </tr>
        </thead>

        <tbody>
    @foreach($users as $val)
          
        <tr>
            <td style="border:1px ridge black;">{{$val->Product_Id}}</td>
            <td style="border:1px ridge black;">{{$val->Product_Name}}</td>
            <td style="border:1px ridge black;">{{$val->Is_Active}}</td>
            <td style="border:1px ridge black;">{{$val->Document}}</td>
            <td style="border:1px ridge black;">{{$val->Created_On}}</td>            
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div>
         
@endsection
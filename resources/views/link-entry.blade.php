@extends('include.master')
@section('content')
 <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Message Link Detail</h3></center>
        </div><br><br>
<!-- **Header section end -->
            


       <form class="form-horizontal" name="message_link_detail" id="message_link_detail"  method="post">
           {{csrf_field()}}

           @if (Session::has('message'))
          <div class="alert alert-info" role="alert">
              <button type="button" class="close"  data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ Session::get('message') }}  
          </div>
         @endif
              <div class="form-group">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Enter&nbsp;Link&nbsp;Name:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="link" name="link"   style="margin-left: -15%;">
                </div>
              <div class="col-sm-4">
              </div><br><br>
              
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Enter&nbsp;Message&nbsp;Body:</label>
                </div>
                <div class="col-sm-4">
                  <textarea type="text" class="form-control" id="MsgBody" name="MsgBody"   style="margin-left: -15%;"></textarea>
                </div>
              <div class="col-sm-4">
              </div><br><br><br>


              <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Enter&nbsp;Title:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="title" name="title"   style="margin-left: -15%;">
                </div>
              <div class="col-sm-4">
              </div><br><br>
            </div>

            <center>
                <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
              </center>
          </form>
          </div>
        </div>




         <script type="text/javascript">
     window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);
</script>





              @endsection



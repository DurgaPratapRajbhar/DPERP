@extends('include.master')
@section('content')
<div class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">User Table</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">

            <form role="form">  
            <div class="col-md-6">  <!--Left side -->
              <div class="form-group"> 
	                  <label for="exampleInputEmail1">Email address</label>
	                  <input type="text" class="form-control" name="name" placeholder="Enter name">
	                </div>
            </div>
            <div class="col-md-6"> <!--Right side -->
               <div class="form-group"> 
	                  <label for="exampleInputEmail1">Email address</label>
	                  <input type="text" class="form-control" name="name" placeholder="Enter name">
	                </div>
              
            </div>
            
            
			   <div class="row">
			  <div class="col-sm-12">
			    <div class="text-center">
			      <button class="btn btn-primary" id="singlebutton">submit</button>
			    </div>
			  </div>
			</div>
            </form>


          </div>
         
        </div>
       
      </div>

</div>

@endsection
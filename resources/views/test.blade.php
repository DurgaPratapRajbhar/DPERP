@extends('include.master')
@section('content')
    <!-- Main content -->
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
	          <div class="box box-primary">
	             <form action="{{url('insert')}}" method="post">  {{csrf_field()}}

	              <div class="box-body">
	                <div class="form-group"> 
	                  <label for="exampleInputEmail1">Email address</label>
	                  <input type="text" class="form-control" name="name" placeholder="Enter name">
	                </div>
	               <!--  <div class="form-group">
	                  <label for="exampleInputPassword1">Password</label>
	                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	                </div> -->
	                

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
	              </div>
	            </form>
	          </div>
             </div>
           </div>


             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
              
                </tr>
                </thead>
                <tbody>

                @foreach($query as $val)
                <tr>
                  <td>{{$val->id}}</td>
                  <td>{{$val->name}}</td>
                  
                </tr>
                 @endforeach
              
                </tbody>
                
              </table>

         </div>
     <!-- /.box-header -->   

        



      </div>
    </div>
 

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection


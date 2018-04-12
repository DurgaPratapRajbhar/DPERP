<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="{{url('cssfile/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('cssfile/Admin.min.css')}}">
  <link rel="stylesheet" href="{{url('cssfile/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('cssfile/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('cssfile/dataTables.bootstrap.min.css')}}">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{url('jsfile/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('jsfile/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{url('jsfile/dist/js/demo.js')}}"></script>
  <script src="{{url('jsfile/dist/js/adminlte.min.js')}}"></script>
   <script src="{{url('jsfile/bootstrap.min.js')}}"></script>


   <script src="{{url('jsfile/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('jsfile/dataTables.bootstrap.min.js')}}"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
 <div class="wrapper">
    @include('include.header')
    @include('include.sidebars')
    @yield('content')
    @include('include.footer')
</div>
   
</body>
</html>
 
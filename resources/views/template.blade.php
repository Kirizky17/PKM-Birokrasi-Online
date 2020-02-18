<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://www.polban.ac.id/wp-content/uploads/2017/10/LOGO-gram.png" sizes="10x10" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  	<!-- iCheck -->
  	<link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  	<!-- JQVMap -->
  	<link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  	<!-- overlayScrollbars -->
  	<link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  	<!-- summernote -->
  	<link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('css/datatables.min.css')}}"/>

  	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}"/>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" integrity="sha256-zFnNbsU+u3l0K+MaY92RvJI6AdAVAxK3/QrBApHvlH8=" crossorigin="anonymous" />

  	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  	<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- ChartJS -->
	<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
	<!-- Sparkline -->
	<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
	<!-- JQVMap -->
	<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
	<!-- daterangepicker -->
	<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
	<!-- Summernote -->
	<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
	<!-- overlayScrollbars -->
	<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
	<script src="{{asset('adminlte/plugins/jsgrid/jsgrid.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script> -->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
		$(document).ready(function() {
		    $('#list_usulan').DataTable();
		} );
	</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed">
	<div class="wrapper" id="main">
		@yield('content')
	</div>
	<!-- <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script> -->
	<!-- jQuery -->


</body>
</html>

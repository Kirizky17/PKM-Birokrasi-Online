@extends('template')
@section('title','Dashboard PKM')
@section('content')
	@include('User\navbar')
	@include('User\sidebar')
	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-12">
	            <h1 class="m-0 text-dark">@yield('content-title')</h1>
	          </div><!-- /.col -->
	        </div><!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->
	    <div class="content">
	    	<div class="container-fluid">
				@yield('main-content')
	    	</div>
	    </div>
	  </div>
	  <!-- /.content-wrapper -->
	  @include('User\footer')
@endsection
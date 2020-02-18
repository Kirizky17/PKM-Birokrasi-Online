@extends('template')
@section('content')
	<div class="row" id="main-login-admin">
		<div class="container">
			<div id="login-image" class="text-center">
				<img id="login-logo-polban" src="{{asset('images/polban-logo.png')}}">
			</div>
		</div>
		<div class="container" id="header-login-admin">
			<div id="title-login" class="row justify-content-center">
		    	<p>PORTAL LOGIN ADMIN</p>
		  	</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col"></div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-10" id="form-div-login-admin">
					<form id="form-login-admin" method="POST" action="{{route('admin.login')}}" autocomplete="off">
						@csrf
						<div class="form-group">
					    	<label for="username-input">Username</label>
					    	<input type="text" name="username" class="form-control" id="username-input" aria-describedby="username" placeholder="Username" required>
					  	</div>
						<div class="form-group">
					    	<label for="password-input">Password</label>
					    	<input type="password" name="password" class="form-control" id="password-input" placeholder="Password" required>
					  	</div>
					  	<div class="container" id="header-login-admin">
							<div class="row justify-content-center">
					  			<button type="submit" class="btn">Login</button>
						  	</div>
						</div>
					</form>
				</div>
				<div class="col"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		const hasAlert = @if(Session::has("alert")) true @else false @endif;
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
		})
		$(document).ready(function() {
			if(true){
				Toast.fire({
					icon: '{{Session::get("alert")}}',
					title: '{{Session::get("message")}}'
				})
			}
		} );
	</script>
@endsection
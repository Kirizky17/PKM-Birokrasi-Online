@extends('template')
@section('title','Login PKM')
@section('content')
	<div class="row" id="main-login-user">
		<div class="container">
			<div id="login-image" class="text-center">
				<img id="login-logo-polban" src="{{asset('images/polban-logo.png')}}">
			</div>
		</div>
		<div class="container" id="header-login-user">
			<div id="title-login" class="row justify-content-center">
		    	<p>PORTAL LOGIN</p>
		  	</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col"></div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-10" id="form-div-login-user">
					<ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
					  	<li class="nav-item">
					    	<a class="nav-link active" id="pills-pengusul-tab" data-toggle="pill" href="#pills-pengusul" role="tab" aria-controls="pills-pengusul" aria-selected="true">Pengusul</a>
					  	</li>
					  	<li class="nav-item">
					 		<a class="nav-link" id="pills-reviewer-tab" data-toggle="pill" href="#pills-reviewer" role="tab" aria-controls="pills-reviewer" aria-selected="false">Reviewer</a>
					  	</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-pengusul" role="tabpanel" aria-labelledby="pills-pengusul-tab">
							<form class="form-login-user" autocomplete="off" method="POST" action="{{route('pengusul.login')}}">
								@csrf
							  	<div class="form-group">
							    	<label for="username-input">Username</label>
							    	<input type="text" name="username" class="form-control" id="username-input" aria-describedby="username" placeholder="Username" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="password-input">Password</label>
							    	<input type="password" name="password" class="form-control" id="password-input" placeholder="Password" required>
							  	</div>
							  	<div class="container" id="header-login-user">
									<div class="row justify-content-center">
							  			<button type="submit" class="btn">Login</button>
								  	</div>
								</div>
							</form>
					  	</div>
					  	<div class="tab-pane fade" id="pills-reviewer" role="tabpanel" aria-labelledby="pills-reviewer-tab">
					  		<form class="form-login-user" autocomplete="on" method="POST" action="{{route('reviewer.login')}}">
					  			@csrf
							  	<div class="form-group">
							    	<label for="username-input">Username</label>
							    	<input type="text" name="username" class="form-control" id="username-input" aria-describedby="username" placeholder="Username" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="password-input">Password</label>
							    	<input type="password" name="password" class="form-control" id="password-input" placeholder="Password" required>
							  	</div>
							  	<div class="container" id="header-login-user">
									<div class="row justify-content-center">
							  			<button type="submit" class="btn">Login</button>
								  	</div>
								</div>
							</form>
					  	</div>
					</div>
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
			if(hasAlert){
				Toast.fire({
					icon: '{{Session::get("alert")}}',
					title: '{{Session::get("message")}}'
				})
			}
		} );
	</script>
@endsection
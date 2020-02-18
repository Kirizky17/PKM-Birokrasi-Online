@extends('user.main')
@section('content-title','LIHAT PROPOSAL')
@section('main-content')
	<div class="container-fluid">
		<div class="row">
		<a href="{{route('pengusul.usulan')}}" class="btn btn-primary"><i class="nav-icon fas fa-arrow-left"></i>&nbsp;Kembali</a>
	</div>
	</div>
	<div class="row">
		<div class="col"></div>
		<div class="col-7">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					PROPOSAL
				</div>
				<div class="card-body" style="border-radius: 0">
					<div>
						<embed id="viewer" type="text/html" src="{{asset('pdf/'.$proposal->proposal)}}" width="100%" height="800px">
						</embed>
					</div>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
@endsection
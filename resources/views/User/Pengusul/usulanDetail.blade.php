@extends('user.main')
@section('content-title','Detail Usulan')
@section('main-content')
	<div class="container-fluid">
		<div class="row">
		<a href="{{route('pengusul.usulan')}}" class="btn btn-primary m-2"><i class="nav-icon fas fa-arrow-left"></i>&nbsp;Kembali</a>
	</div>
	<div class="row">
		<div class="col"></div>
		<div class="col-11">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-primary" style="border-radius: 0">
					Detail Usulan
				</div>
				<div class="card-body" style="border-radius: 0">
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Judul Usulan</div>
						<div class="col-6">: {{$usulan->judul}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Skema PKM</div>
						<div class="col-6">: {{$usulan->skim}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Tahun Pelaksanaan</div>
						<div class="col-6">: {{$usulan->tahun}}</div>
					</div>

					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Ketua Kelompok</div>
						<div class="col-6">: {{$ketua->nama}}</div>
					</div>
					<?php $i = 1?>
					@foreach($anggotaUsulan as $anggota)
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Anggota <?php echo $i ?></div>
						<div class="col-6">: {{$anggota->nama}}</div>
					</div>
					<?php $i++ ?>
					@endforeach
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Dosen Pendamping</div>
						<div class="col-6">: {{$dosenPendamping->nama}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Status Usulan</div>
						<div class="col-6">: 
							@switch($usulan->status)
						    	@case(0)
									Data Belum Lengkap
						    		@break
						    	@case(1)
									Proposal Belum diupload
						    		@break
						    	@case(2)
									Proposal Sedang direview
						    		@break
						   		@case(3)
									Proposal Didanai
						   			@break
						   		@case(-1)
									Proposal Ditolak
						   			@break
						   	@endSwitch</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Bidang Ilmu</div>
						<div class="col-6">: {{$usulan->bidangIlmu}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Usulan Biaya Kegiatan</div>
						<div class="col-6">: {{$usulan->usulanBiayaKegiatan}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3">Biaya Didanai</div>
						<div class="col-6">: {{$usulan->biayaDidanai}}</div>
					</div>
				</div>
			</div>
			@if($usulan->proposal != '')
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					PROPOSAL
				</div>
				<div class="card-body" style="border-radius: 0">
					<div>
						<embed id="viewer" type="text/html" src="{{asset('pdf/'.$usulan->proposal)}}" width="100%" height="800px">
						</embed>
					</div>
				</div>
			</div>
			@endif
		</div>
		<div class="col"></div>
	</div>
@endsection
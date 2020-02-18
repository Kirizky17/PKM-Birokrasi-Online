@extends('admin.main')
@section('content-title','Pengaturan')
@section('main-content')
<?php setlocale(LC_TIME, 'id');?>
	<div class="row">
		<div class="col">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					PENGATURAN
				</div>
				<div class="card-body" style="border-radius: 0; font-size: 25px">
					@if(!$statusPKM)
						Sesi PKM saat ini belum aktif<br>
						<a href="{{route('admin.add.pengaturan')}}" class="btn btn-primary margin-top-bottom"><i class="nav-icon fas fa-plus-circle"></i> Buat Sesi PKM</a>
					@else
						<div class="card-body" style="border-radius: 0">
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Tahun Pelaksanaan PKM</div>
								<div class="col-5">: <?= $statusPKM->tahunPelaksanaan?></div>
							</div>
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Timeline Unggah Proposal</div>
								<div class="col-5">: <?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiUnggahProposal)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirUnggahProposal))?></div>
							</div>
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Timeline Penilaian Proposal</div>
								<div class="col-5">: <?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiPenilaianProposal)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirPenilaianProposal))?></div>
							</div>
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Timeline Unggah Laporan Kemajuan</div>
								<div class="col-5">: <?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiUnggahLaporanKemajuan)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirUnggahLaporanKemajuan))?></div>
							</div>
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Timeline Penilaian Laporan Kemajuan</div>
								<div class="col-5">: <?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiPenilaianLaporanKemajuan)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirPenilaianLaporanKemajuan))?></div>
							</div>
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Timeline Unggah Laporan Akhir</div>
								<div class="col-5">: <?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiUnggahLaporanAkhir)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirUnggahLaporanAkhir))?></div>
							</div>
							<div class="row">
								<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4">Timeline Penilaian Laporan Akhir</div>
								<div class="col-5">: <?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiPenilaianLaporanAkhir)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirPenilaianLaporanAkhir))?></div>
							</div>
						</div>
						<a href="{{route('admin.edit.pengaturan')}}" class="btn btn-primary margin-top-bottom"><i class="nav-icon fas fa-info-circle"></i> Edit Sesi PKM</a>
						<a href="{{route('admin.finish.pengaturan')}}" class="btn btn-danger margin-top-bottom"><i class="nav-icon fas fa-check-circle"></i> Tutup Sesi PKM</a>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection

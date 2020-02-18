@extends('user.main')
@section('content-title','Beranda Pengusul Program Kreativitas Mahasiswa')
@section('main-content')
	<?php setlocale(LC_TIME, 'id');?>
	<div class="row">
		<div class="col"></div>
		<div class="col-11">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-primary" style="border-radius: 0">
					IDENTITAS PERSONAL	
				</div>
				<div class="card-body" style="border-radius: 0">
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">Nama</div>
						<div class="col-4">: {{$pengusul->nama}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">Nomor Induk Mahasiswa</div>
						<div class="col-4">: {{$pengusul->NIM}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">Angkatan</div>
						<div class="col-4">: {{$pengusul->angkatan}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">Jurusan</div>
						<div class="col-4">: {{$pengusul->jurusan}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">Program Studi</div>
						<div class="col-4">: {{$pengusul->prodi}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">E-mail</div>
						<div class="col-4">: {{$pengusul->email}}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
	@if($statusPKM)
		<div class="content-header">
			<h2>Timeline PKM</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
	            <!-- The time line -->
	            <div class="timeline">
	            	<!-- timeline time label -->
	            	<div class="time-label">
	            		<span class="bg-primary"><?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiUnggahProposal)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirUnggahProposal))?></span>
	              	</div>
	              	<!-- /.timeline-label -->
	              	<!-- timeline item -->
	              	<div>
	                	<i class="fas fa-upload bg-primary"></i>
	                	<div class="timeline-item">
	                  		<h3 class="timeline-header no-border">Batas Penggunggahan Proposal</h3>
	                	</div>
	              	</div>
	              	<!-- END timeline item -->
	              	<!-- timeline time label -->
	            	<div class="time-label">
	            		<span class="bg-primary"><?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiPenilaianProposal)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirPenilaianProposal))?></span>
	              	</div>
	              	<!-- /.timeline-label -->
	              	<!-- timeline item -->
	              	<div>
	                	<i class="fas fa-edit bg-primary"></i>
	                	<div class="timeline-item">
	                  		<h3 class="timeline-header no-border">Batas Penilaian Proposal</h3>
	                	</div>
	              	</div>
	              	<!-- END timeline item -->
	              	<!-- timeline time label -->
	            	<div class="time-label">
	            		<span class="bg-primary"><?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiUnggahLaporanKemajuan)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirUnggahLaporanKemajuan))?></span>
	              	</div>
	              	<!-- /.timeline-label -->
	              	<!-- timeline item -->
	              	<div>
	                	<i class="fas fa-upload bg-primary"></i>
	                	<div class="timeline-item">
	                  		<h3 class="timeline-header no-border">Batas Penggunggahan Laporan Kemajuan</h3>
	                	</div>
	              	</div>
	              	<!-- END timeline item -->
	              	<!-- timeline time label -->
	            	<div class="time-label">
	            		<span class="bg-primary"><?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiPenilaianLaporanKemajuan)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirPenilaianLaporanKemajuan))?></span>
	              	</div>
	              	<!-- /.timeline-label -->
	              	<!-- timeline item -->
	              	<div>
	                	<i class="fas fa-upload bg-primary"></i>
	                	<div class="timeline-item">
	                  		<h3 class="timeline-header no-border">Batas Penilaian Laporan Kemajuan</h3>
	                	</div>
	              	</div>
	              	<!-- END timeline item -->
	              	<!-- timeline time label -->
	            	<div class="time-label">
	            		<span class="bg-primary"><?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiUnggahLaporanAkhir)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirUnggahLaporanAkhir))?></span>
	              	</div>
	              	<!-- /.timeline-label -->
	              	<!-- timeline item -->
	              	<div>
	                	<i class="fas fa-upload bg-primary"></i>
	                	<div class="timeline-item">
	                  		<h3 class="timeline-header no-border">Batas Penggunggahan Laporan Akhir</h3>
	                	</div>
	              	</div>
	              	<!-- END timeline item -->
	              	<!-- timeline time label -->
	            	<div class="time-label">
	            		<span class="bg-primary"><?= strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->mulaiPenilaianLaporanAkhir)) . " - " . strftime("%d %B %Y %H:%M:%S",strtotime($statusPKM->akhirPenilaianLaporanAkhir))?></span>
	              	</div>
	              	<!-- /.timeline-label -->
	              	<!-- timeline item -->
	              	<div>
	                	<i class="fas fa-upload bg-primary"></i>
	                	<div class="timeline-item">
	                  		<h3 class="timeline-header no-border">Batas Penilaian Laporan Akhir</h3>
	                	</div>
	              	</div>
	              	<!-- END timeline item -->
	            </div>
	        </div>
	    </div>
	@endif
@endsection
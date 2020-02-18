@extends('user.main')
@section('content-title','Beranda Reviewer Program Kreativitas Mahasiswa')
@section('main-content')
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
						<div class="col-4">: {{$reviewer->nama}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">NIP</div>
						<div class="col-4">: {{$reviewer->NIP}}</div>
					</div>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">Pekerjaan Fungsional</div>
						<div class="col-4">: {{$reviewer->unitKerja}}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-12">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3>
						100
					</h3>
					<p>Total PKM yang di Review</p>
				</div>
				<div class="icon">
					<i class="fa fa-calendar"></i>
				</div>
				<a href="{{route('admin.pengaturan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-4 col-12">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3>
						50
					</h3>
					<p>Belum di Review</p>
				</div>
				<div class="icon">
					<i class="fa fa-calendar"></i>
				</div>
				<a href="{{route('admin.pengaturan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-4 col-12">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3>
						50
					</h3>
					<p>Sudah di Review</p>
				</div>
				<div class="icon">
					<i class="fa fa-calendar"></i>
				</div>
				<a href="{{route('admin.pengaturan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
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
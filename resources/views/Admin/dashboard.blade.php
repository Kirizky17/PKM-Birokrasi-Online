@extends('admin.main')
@section('content-title','Beranda Admin Program Kreativitas Mahasiswa')
@section('main-content')
<?php setlocale(LC_TIME, 'id');?>
@if($statusPKM)
	<?php
		$status = "AKTIF";
		$active = "success";
	?>
@else
	<?php
		$status = "TIDAK AKTIF";
		$active = "danger";
	?>
@endif
	<div class="row">
		<div class="card-body" style="border-radius: 0">
			<div class="row">
				<div class="col-lg-12 col-12">
					<!-- small box -->
					<div class="small-box bg-<?=$active?>">
						<div class="inner">
							<h3>
								{{$status}}
							</h3>
							<p>Status Sesi PKM</p>
						</div>
						<div class="icon">
							<i class="fa fa-calendar"></i>
						</div>
						<a href="{{route('admin.pengaturan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				@if($statusPKM)
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>{{$data['total_usulan_session']}}</h3>
							<p>Total Usulan Sesi Tahun Ini </p>
						</div>
						<div class="icon">
							<i class="fa fa-book"></i>
						</div>
						<a href="{{route('admin.usulan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>	
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>{{$data['usulan_didanai_session']}}</h3>
							<p>Usulan Didanai Sesi Tahun Ini </p>
						</div>
						<div class="icon">
							<i class="fa fa-book-open"></i>
						</div>
						<a href="{{route('admin.usulan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>	
				@endif
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>{{$data['total_usulan']}}</h3>
							<p>Total Usulan Seluruhnya</p>
						</div>
						<div class="icon">
							<i class="fa fa-book"></i>
						</div>
						<a href="{{route('admin.usulan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>	
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>{{$data['usulan_didanai']}}</h3>
							<p>Usulan Didanai Seluruhnya</p>
						</div>
						<div class="icon">
							<i class="fa fa-book-open"></i>
						</div>
						<a href="{{route('admin.usulan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>	
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
@extends('user.main')
@section('content-title','List Pengajuan Program Kreativitas Mahasiswa')
@section('main-content')
	@php ($no = 1)
	<div class="row">
		<div class="col">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-light" style="border-radius: 0">
					DAFTAR USULAN
				</div>
				<div class="card-body" style="border-radius: 0">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th>No</th>
								<th>Tahun</th>
								<th>Skim</th>
								<th>Judul</th>
								<th>Peran</th>
								<th>Status</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($list_usulan as $usulan)
						    <tr>
						    	<td>{{$no}}</td>
						    	<td>{{$usulan->tahun}}</td>
						    	<td>{{$usulan->skim}}</td>
						    	<td>{{$usulan->judul}}</td>
						    	<td>{{$usulan->peran}}</td>
						    	<td>
						    		@switch($usulan->status)
						    			@case(0)
											Data Belum Lengkap
						    				@break
						    			@case(1)
											Proposal Belum Diupload
						    				@break
						    			@case(2)
											Proposal Sedang Direview
						    				@break
						    			@case(3)
											Proposal Didanai
						    				@break
						    			@case(-1)
											Proposal Ditolak
						    				@break
						    		@endSwitch
						    	</td>
						    	<td>
						    		<center>
							    		@switch($usulan->status)
							    			@case(0)
												@if($usulan->peran == "Ketua Kelompok")
													<a href="{{ route('pengusul.usulan.edit',$usulan->idUsulan)}}">
														<button type="button" class="btn btn-primary my-button">
															<i class="nav-icon fas fa-edit"></i> Lengkapi Usulan
														</button>
													</a>
												@else
													<button type="button" class="btn btn-disabled my-button">
														Data Belum Lengkap
													</button>
												@endif

							    				@break
							    			@case(1)
							    				@if($usulan->peran == "Ketua Kelompok")
													<a href="{{ route('pengusul.proposal.upload',$usulan->idUsulan)}}">
														<button type="button" class="btn btn-primary my-button">
															<i class="nav-icon fas fa-edit"></i> Upload Proposal
														</button>
													</a>
												@else
													<button type="button" class="btn btn-disabled my-button">
														<i class="nav-icon fas fa-file-pdf"></i> Proposal Belum Diupload
													</button>
												@endif
												@break
											@case(2)
											@case(3)
												<a href="{{ route('pengusul.usulan.view',$usulan->idUsulan)}}">
													<button type="button" class="btn btn-success my-button">
														<i class="nav-icon fas fa-info-circle"></i> Lihat Data
													</button>
												</a>
							    				@break
							    		@endSwitch
						    		</center>
						    	</td>
						    </tr>
						    @php ($no++)
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
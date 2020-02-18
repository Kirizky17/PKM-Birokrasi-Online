@extends('admin.main')
@section('content-title','Daftar Usulan Program Kreativitas Mahasiswa')
@section('main-content')
	<div class="row">
		<div class="col">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					DAFTAR USULAN
				</div>
				<div class="card-body" style="border-radius: 0">
					<a href="{{route('admin.add.usulan')}}" class="float-right btn btn-primary margin-top-bottom"><i class="nav-icon fas fa-plus-circle"></i> Tambah Usulan</a>

					<table id="list_usulan" class="display" style="width:100%">
				        <thead>
				            <tr>
								<th>Tahun</th>
								<th>Judul</th>
								<th>Skim</th>
								<th>Pengusul</th>
								<th>Status</th>
								<th>Aksi</th>
				            </tr>
				        </thead>
				        <tbody>
				            @foreach ($list_usulan as $usulan)
						    <tr>
						    	<td style="padding-left: 20px;">{{$usulan->tahun}}</td>
						    	<td style="padding-left: 20px;">{{$usulan->judul}}</td>
						    	<td style="padding-left: 20px;">{{$usulan->skim}}</td>
						    	<td style="padding-left: 20px;">{{$usulan->nama}}</td>
						    	<td style="padding-left: 20px;">
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
						    		@endSwitch
						    	</td>
						    	<td>
						    		@switch($usulan->status)
							    			@case(0)
												<a href="{{ route('admin.detail.usulan',$usulan->idUsulan)}}">
													<button type="button" class="btn btn-primary my-button m-1">
														<i class="nav-icon fas fa-info-circle"></i> Detail Usulan
													</button>
												</a>
							    				@break
							    			@case(1)
											@case(2)
											@case(3)
												<a href="{{ route('admin.detail.usulan',$usulan->idUsulan)}}">
													<button type="button" class="btn btn-primary my-button m-1">
														<i class="nav-icon fas fa-info-circle"></i> Detail Usulan
													</button>
												</a>
							    				@break
							    		@endSwitch
						    	</td>
						    </tr>
						@endforeach
				        </tbody>
				        <tfoot>
				            <tr>
								<th>Tahun</th>
								<th>Judul</th>
								<th>Skim</th>
								<th>Pengusul</th>
								<th>Status</th>
								<th>Aksi</th>
				            </tr>
				        </tfoot>
				    </table>
				</div>
			</div>
		</div>
	</div>
@endsection
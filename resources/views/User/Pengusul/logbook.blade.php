@extends('user.main')
@section('content-title','Catatan Harian (Logbook)')
@section('main-content')
	@php ($no = 1)
	<div class="row">
		<div class="col">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-light" style="border-radius: 0">
					Usulan Didanai
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
								<th>Aksi</th>
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
						    	<td></td>
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
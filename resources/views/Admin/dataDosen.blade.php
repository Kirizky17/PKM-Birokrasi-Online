@extends('admin.main')
@section('content-title','Data Pendukung - Dosen')
@section('main-content')
	<div class="row">
		<div class="col">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					DAFTAR DOSEN
				</div>
				<div class="card-body" style="border-radius: 0">
					<table id="list_usulan" class="display" style="width:100%">
				        <thead>
				            <tr>
								<th>NIP</th>
								<th>Nama</th>
								<th>Unit Kerja</th>
								<th>Username</th>
								<th>Password</th>
								<th>Aksi</th>
				            </tr>
				        </thead>
				        <tbody>
				            @foreach ($list_dosen as $dosen)
						    <tr>
						    	<td style="padding-left: 20px;">{{$dosen->NIP}}</td>
						    	<td style="padding-left: 20px;">{{$dosen->nama}}</td>
						    	<td style="padding-left: 20px;">{{$dosen->unitKerja}}</td>
						    	<td style="padding-left: 20px;">{{$dosen->username}}</td>
						    	<td style="padding-left: 20px;">{{$dosen->password}}</td>
						    	<td class="project-actions text-right">
		                          	<a class="btn btn-primary btn-sm" href="#">
		                              	<i class="fas fa-folder">
		                              	</i>
		                              	Detail
		                          	</a>
		                          	<a class="btn btn-info btn-sm" href="#">
		                              	<i class="fas fa-pencil-alt">
		                              	</i>
		                              	Edit
		                          	</a>
		                          	<a class="btn btn-danger btn-sm" href="#">
		                              	<i class="fas fa-trash">
		                              	</i>
		                              	Hapus
		                          	</a>
		                      	</td>
						    </tr>
							@endforeach
				        </tbody>
				        <tfoot>
				            <tr>
								<th>NIP</th>
								<th>Nama</th>
								<th>Unit Kerja</th>
								<th>Username</th>
								<th>Password</th>
								<th>Aksi</th>
				            </tr>
				        </tfoot>
				    </table>
				</div>
			</div>
		</div>
	</div>
@endsection
@extends('user.main')
@section('content-title','Tambah Usulan Baru')
@section('main-content')
	<div class="row">
		<div class="col"></div>
		<div class="col-5">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					FORM TAMBAH USULAN BARU
				</div>
				<div class="card-body" style="border-radius: 0">
					<form method="POST" action="{{route('pengusul.usulan.edit',$usulan->idUsulan)}}">
						@csrf
						<div class="form-group">
		                    <label for="judul">Judul</label>
		                    <input type="text" name="judul" value="{{$usulan->judul}}" class="form-control" id="judul" placeholder="Judul" readonly>
							</select>
		                </div>
		                <div class="form-group">
		                    <label for="judul">Tahun</label>
		                    <input type="text" name="tahun" value="{{$usulan->tahun}}" class="form-control" id="tahun" placeholder="Tahun" readonly>
							</select>
		                </div>
		                <div class="form-group">
		                    <label for="skim">SKIM</label>
		                    <input type="text" name="skim" value="{{$usulan->skim}}" class="form-control" id="skim" placeholder="SKIM" readonly>
							</select>
		                </div>
		                <div class="form-group">
		                    <label for="bidangIlmu">Bidang Ilmu</label>
		                    <input type="text" name="bidangIlmu" class="form-control" id="bidangIlmu" placeholder="Bidang Ilmu" required>
							</select>
		                </div>
		                <div class="form-group">
		                    <label for="usulanBiaya">Usulan Biaya Kegiatan</label>
		                    <input type="text" name="usulanBiaya" class="form-control" id="usulanBiaya" placeholder="Usulan Biaya Kegiatan" required>
							</select>
		                </div>
		                <center><button type="submit" class="btn btn-primary">Edit Usulan</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
@endsection
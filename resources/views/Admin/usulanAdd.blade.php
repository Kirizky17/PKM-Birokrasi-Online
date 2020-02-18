@extends('admin.main')
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
					<form method="POST" action="{{route('admin.add.usulan')}}">
						@csrf
						<div class="form-group">
		                    <label for="nimKetua">NIM Pengusul</label>
		                    <select class="data-mahasiswa js-states form-control" name="nimKetua" required>
							</select>
		                </div>
		                
		                <!-- <div class="form-group">
		                    <label for="pengusul-nim">Nama Pengusul</label>
		                    <input type="text" class="form-control" id="pengusul-nim" placeholder="pengusul-nim"?
		                </div> -->
		                <div class="form-group">
		                    <label for="nimAnggota1">NIM Anggota 1</label>
		                    <select class="data-mahasiswa js-states form-control" name="nimAnggota1" required>	
							</select>
		                </div>
		                <!-- <div class="form-group">
		                    <label for="pengusul-nim">Nama Anggota 1</label>
		                    <input type="text" class="form-control" id="pengusul-nim" placeholder="pengusul-nim"?
		                </div> -->
		                <div class="form-group">
		                    <label for="nimAnggota2">NIM Anggota 2</label>
		                    <select class="data-mahasiswa js-states form-control" name="nimAnggota2" required>	
							</select>
		                </div>
		                <!-- <div class="form-group">
		                    <label for="pengusul-nim">Nama Anggota 2</label>
		                    <input type="text" class="form-control" id="pengusul-nim" placeholder="pengusul-nim"?
		                </div> -->
		                <div class="form-group">
		                    <label for="nimAnggota3">NIM Anggota 3</label>
		                    <select class="data-mahasiswa js-states form-control" name="nimAnggota3">	
							</select>
		                </div>
		                <!-- <div class="form-group">
		                    <label for="pengusul-nim">Nama Anggota 3</label>
		                    <input type="text" class="form-control" id="pengusul-nim" placeholder="pengusul-nim"?
		                </div> -->
		                <div class="form-group">
		                    <label for="nimAnggota4">NIM Anggota 4</label>
		                    <select class="data-mahasiswa js-states form-control" name="nimAnggota4">	
							</select>
		                </div>

		                <div class="form-group">
		                    <label for="dosenPendamping">Dosen Pendamping</label>
		                    <select class="data-dosen js-states form-control" name="dosenPendamping">	
							</select>
		                </div>
		                <!-- <div class="form-group">
		                    <label for="pengusul-nim">Nama Anggota 4</label>
		                    <input type="text" class="form-control" id="pengusul-nim" placeholder="pengusul-nim"?
		                </div> -->
		                <div class="form-group">
		                    <label for="judul">Judul</label>
		                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
		                </div>
		                <div class="form-group">
		                    <label for="skim">SKIM</label>
		                    <select name='skim' class="form-control">
		                    	<option value="PKM-M">PKM-M</option>
		                    	<option value="PKM-AI">PKM-AI</option>
		                    	<option value="PKM-P">PKM-P</option>
		                    	<option value="PKM-KC">PKM-KC</option>
		                    	<option value="PKM-GT">PKM-GT</option>
		                    	<option value="PKM-T">PKM-T</option>
		                    	<option value="PKM-GFK">PKM-GFK</option>
		                    </select>
		                </div>
		                <center><button type="submit" class="btn btn-primary">Tambah Usulan</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
	<script>
		var placeholder = "Select a State";
		$(document).ready(function() {
		    $('.data-mahasiswa').select2({
		    	placeholder: "Masukkan NIM atau Nama",
		    	data: <?php echo($list_mahasiswa) ?>,
		    	theme: "bootstrap",
		    	allowClear: true
		    });
		    $('.data-dosen').select2({
		    	placeholder: "Masukkan NIP atau Nama",
		    	data: <?php echo($list_dosen) ?>,
		    	theme: "bootstrap",
		    	allowClear: true
		    });
		} );
	</script>
@endsection
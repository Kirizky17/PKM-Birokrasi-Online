@extends('admin.main')
@section('content-title','Buat Sesi PKM')
@section('main-content')
	<div class="row">
		<div class="col"></div>
		<div class="col-5">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					FORM PEMBUATAN SESI PKM
				</div>
				<div class="card-body" style="border-radius: 0">
					<form method="POST" action="{{route('admin.add.pengaturan')}}">
						@csrf
		                <div class="form-group">
		                    <label for="tahunPelaksanaan">Tahun Pelaksanaan</label>
		                    <input type="text" name="tahunPelaksanaan" class="form-control" id="tahunPelaksanaan" placeholder="Tahun Pelaksanaan" value="<?= date("Y"); ?>" readonly >
		                </div>
		                <div class="form-group">
		                  	<label>Timeline Unggah Proposal:</label>
		                  	<div class="input-group">
		                    	<div class="input-group-prepend">
			                      	<span class="input-group-text">
			                        	<i class="far fa-calendar-alt"></i>
			                      	</span>
		                    	</div>
		                    	<input type="text" class="form-control float-right" name="unggahProposal" id="unggahProposal">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label>Timeline Penilaian Proposal:</label>
		                  	<div class="input-group">
		                    	<div class="input-group-prepend">
			                      	<span class="input-group-text">
			                        	<i class="far fa-calendar-alt"></i>
			                      	</span>
		                    	</div>
		                    	<input type="text" class="form-control float-right" name="penilaianProposal" id="penilaianProposal">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label>Timeline Unggah Laporan Kemajuan:</label>
		                  	<div class="input-group">
		                    	<div class="input-group-prepend">
			                      	<span class="input-group-text">
			                        	<i class="far fa-calendar-alt"></i>
			                      	</span>
		                    	</div>
		                    	<input type="text" class="form-control float-right" name="unggahLaporanKemajuan" id="unggahLaporanKemajuan">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label>Timeline Penilaian Laporan Kemajuan:</label>
		                  	<div class="input-group">
		                    	<div class="input-group-prepend">
			                      	<span class="input-group-text">
			                        	<i class="far fa-calendar-alt"></i>
			                      	</span>
		                    	</div>
		                    	<input type="text" class="form-control float-right" name="penilaianLaporanKemajuan" id="penilaianLaporanKemajuan">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label>Timeline Unggah Laporan Akhir:</label>
		                  	<div class="input-group">
		                    	<div class="input-group-prepend">
			                      	<span class="input-group-text">
			                        	<i class="far fa-calendar-alt"></i>
			                      	</span>
		                    	</div>
		                    	<input type="text" class="form-control float-right" name="unggahLaporanAkhir" id="unggahLaporanAkhir">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label>Timeline Penilaian Laporan Akhir:</label>
		                  	<div class="input-group">
		                    	<div class="input-group-prepend">
			                      	<span class="input-group-text">
			                        	<i class="far fa-calendar-alt"></i>
			                      	</span>
		                    	</div>
		                    	<input type="text" class="form-control float-right" name="penilaianLaporanAkhir" id="penilaianLaporanAkhir">
		                  	</div>
		                </div>
		                <center><button type="submit" class="btn btn-primary">Tambah Usulan</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
	<script type="text/javascript">
		$('#unggahProposal').daterangepicker({
		      timePicker: true,
		      timePicker24Hour: true,
		      timePickerIncrement: 1,
		      locale: {
		        format: 'YYYY-MM-DD HH:mm'
		      }
		    })
		$('#penilaianProposal').daterangepicker({
		      timePicker: true,
		      timePicker24Hour: true,
		      timePickerIncrement: 1,
		      locale: {
		        format: 'YYYY-MM-DD HH:mm'
		      }
		    })
		$('#unggahLaporanKemajuan').daterangepicker({
		      timePicker: true,
		      timePicker24Hour: true,
		      timePickerIncrement: 1,
		      locale: {
		        format: 'YYYY-MM-DD HH:mm'
		      }
		    })
		$('#penilaianLaporanKemajuan').daterangepicker({
		      timePicker: true,
		      timePicker24Hour: true,
		      timePickerIncrement: 1,
		      locale: {
		        format: 'YYYY-MM-DD HH:mm'
		      }
		    })
		$('#unggahLaporanAkhir').daterangepicker({
		      timePicker: true,
		      timePicker24Hour: true,
		      timePickerIncrement: 1,
		      locale: {
		        format: 'YYYY-MM-DD HH:mm'
		      }
		    })
		$('#penilaianLaporanAkhir').daterangepicker({
		      timePicker: true,
		      timePicker24Hour: true,
		      timePickerIncrement: 1,
		      locale: {
		        format: 'YYYY-MM-DD HH:mm'
		      }
		    })
	</script>
@endsection
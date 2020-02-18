@extends('user.main')
@section('content-title','UPLOAD PROPOSAL')
@section('main-content')
	<div class="row">
		<div class="col"></div>
		<div class="col-5">
			<div class="card" style="border-radius: 0">
				<div class="card-header bg-dark" style="border-radius: 0">
					UPLOAD PROPOSAL
				</div>
				<div class="card-body" style="border-radius: 0">
					<form id="myForm" method="POST" action="{{route('pengusul.proposal.upload',$id)}}" enctype="multipart/form-data">
						@csrf
						<div>
							<iframe id="viewer" src="" width="100%" height="600px">
							</iframe>
						</div>
						 <input id="uploadPDF" type="file" name="pdfFile" onchange="PreviewImage()" accept="application/pdf" />
		                <center><button type="submit" class="btn btn-primary">Upload Proposal</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
	<script type="text/javascript">
		function PreviewImage() {
		    pdffile=document.getElementById("uploadPDF").files[0];
		    if(pdffile.type == "application/pdf"){
		    	pdffile_url=URL.createObjectURL(pdffile);
		    	$('#viewer').attr('src',pdffile_url);
		    }else{
		    	alert("Mohon Upload File PDF");
		    }
		}
	</script>
@endsection
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
		
	<div class="container">
		<h1>Edit Data Mahasiswa</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		
		<div class="row">
			<div class="col-lg-12">
				
			<form action="/mahasiswa/{{$mahasiswa->id}}/update" method="post">
				      		{{csrf_field()}}

				      	<form>
						  <div class="mb-3">
						    <label for="" class="form-label">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
						    <div id="emailHelp"  class="form-text"></div>
						  </div>
						  <div class="mb-3">
						    <label for="" class="form-label">NIM</label>
						    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nim}}">
						    <div id="emailHelp"  class="form-text"></div>
						  </div>
						  <div class="mb-3">
						    <label for="" class="form-label">Fakultas</label>
						    <input name="fakultas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->fakultas}}">
						    <div id="emailHelp"  class="form-text"></div>
						  </div>
						  <div class="mb-3">
						    <label for="" class="form-label">Program Studi</label>
						    <input name="prodi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->prodi}}">
						    <div id="emailHelp"  class="form-text"></div>
						  </div>
						  <div class="mb-3">
						  	<label for="" class="form-label" >Alamat</label>
						    <textarea name="alamat"  class="form-control" id="exampleInputEmail1" rows="3">{{$mahasiswa->alamat}}</textarea>
						  </div>


						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>

		

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

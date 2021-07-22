<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
		
	<div class="container">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		
		<div class="row">
			<div class="col-6">
				<h1>Data Mahasiswa</h1>
				
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  + Tambah
				</button>
			</div>
				

				<table class="table table-hover">
				<tr>
					<th> Nama </th>
					<th> NIM </th>
					<th> Fakultas </th>
					<th> Program Studi </th>
					<th> Alamat </th>
					<th> Aksi </th>
				</tr>
				@foreach($data_mahasiswa as $mahasiswa)

				<tr>
					<td> {{$mahasiswa->nama}} </td>
					<td> {{$mahasiswa->nim}} </td>
					<td> {{$mahasiswa->fakultas}} </td>
					<td> {{$mahasiswa->prodi}} </td>
					<td> {{$mahasiswa->alamat}} </td>
					<td> 
						<a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a></td>
				</tr>
				@endforeach
				</table>
		</div>	
			</div>
			<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Data Mahasiswa</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<form action="/mahasiswa/create" method="post">
				      		{{csrf_field()}}

				      	<form>
						  <div class="mb-3">
						    <label for="nama" class="form-label">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    <div id="emailHelp" class="form-text"></div>
						  </div>
						  <div class="mb-3">
						    <label for="nama" class="form-label">NIM</label>
						    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    <div id="emailHelp" class="form-text"></div>
						  </div>
						  <div class="mb-3">
						    <label for="nama" class="form-label">Fakultas</label>
						    <input name="fakultas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    <div id="emailHelp" class="form-text"></div>
						  </div>
						  <div class="mb-3">
						    <label for="nama" class="form-label">Program Studi</label>
						    <input name="prodi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    <div id="emailHelp" class="form-text"></div>
						  </div>
						  <div class="mb-3">
						  	<label for="textarea" class="form-label">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleInputEmail1" rows="3"></textarea>
						  </div>
					
						  
						

				       
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				      </div>
				      </form>
				    </div>
				  </div>
				</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

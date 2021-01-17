@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Tambah Data Produk</strong>
					</div>
					<div class="card-body container-fluid">
						<form action="{{url('admin/user', $user->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$user->nama}}" required>
							</div>
							<div class="form-group">
								<label class="control-label">Username</label>
								<input type="text" class="form-control" name="username" value="{{$user->username}}" required>
							</div>
							<div class="form-group">
								<label class="control-label">Email</label>
								<input type="email" value="{{$user->email}}" class="form-control" name="email" required>
							</div>
							<div class="form-group">
								<label class="control-label">Tempat Lahir</label>
								<input type="text" class="form-control" value="{{$user->tmptlahir}}" name="tmptlahir" required>
							</div>
							<div class="form-group">
								<label class="control-label">Tanggal Lahir</label>
								<input type="date" class="form-control" value="{{$user->tgllahir}}" name="tgllahir" required>
							</div>
							<div class="form-group">
								<label class="control-label">Password</label>
								<input type="password" value="" class="form-control" name="password" required>
							</div>
							<div class="form-group">
								<label class="control-label">Foto Profil</label>
								<input type="file" class="form-control" name="gambar">
							</div>
							<button class="btn btn-primary float-right" name="simpan"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
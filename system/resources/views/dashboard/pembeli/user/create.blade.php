@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Tambah Data User</strong>
					</div>
					<div class="card-body container-fluid">
						<form action="{{url('admin/user')}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" required>
							</div>
							<div class="form-group">
								<label class="control-label">Username</label>
								<input type="text" class="form-control" name="username" required>
							</div>
							<div class="form-group">
								<label class="control-label">level</label>
								<select class="form-control" name="level">
									<option>-- Pilih Level Akun--</option>
									<option value="2">Penjual</option>
									<option value="3">Pembeli</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label">Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="form-group">
								<label class="control-label">Tempat Lahir</label>
								<input type="text" class="form-control" name="tmptlahir" required>
							</div>
							<div class="form-group">
								<label class="control-label">Tanggal Lahir</label>
								<input type="date" class="form-control" name="tgllahir" required>
							</div>
							<div class="form-group">
								<label class="control-label">No Handphone</label>
								<input type="number" class="form-control" name="no_handphone" required>
							</div>
							<div class="form-group">
								<label class="control-label">Password</label>
								<input type="password" class="form-control" name="password" required>
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
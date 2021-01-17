@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Tambah Data Kategori</strong>
					</div>
					<div class="card-body container-fluid">
						<form action="{{url('kategori', $kategori->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label class="control-label">Nama Kategori</label>
								<input type="text" class="form-control" name="nama" value="{{$kategori->nama}}" required>
							</div>
							<div class="form-group">
								<label class="control-label">Gambar Kategori</label>
								<input type="file" class="form-control" name="ikon">
							</div>
							<button class="btn btn-primary float-right" name="simpan"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
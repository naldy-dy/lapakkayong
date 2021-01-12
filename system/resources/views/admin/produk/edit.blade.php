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
						<form action="{{url('admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label class="control-label">Nama Produk</label>
								<input type="text" class="form-control" name="nama" value="{{$produk->nama}}" required>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Stok Produk</label>
									<input type="number" class="form-control" name="stok" value="{{$produk->stok}}" required>
								</div>	
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Harga</label>
									<input type="number" class="form-control" name="harga" value="{{$produk->harga}}" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Lokasi Produk</label>
									<input type="text" class="form-control" name="lokasi" value="{{$produk->lokasi}}" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Diskripsi Produk</label>
								<textarea class="form-control" name="diskripsi" required>{{$produk->diskripsi}}</textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Gambar Produk</label>
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
@extends('dashboard.penjual.template.base')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Tambah Data Produk</strong>
					</div>
					<div class="card-body container-fluid">
						<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="control-label">Nama Produk</label>
								<input type="text" class="form-control" maxlength="50" name="nama" required>
							</div>
							<div class="form-group">
								<label class="control-label">Kategori Produk</label>
								<select class="form-control" name="kategori">
									<option>-- Pilih Kategori --</option>
									@foreach($list_kategori as $kategori)
									<option value="{{$kategori->nama}}">{{ucwords($kategori->nama)}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Stok Produk</label>
									<input type="number" class="form-control" name="stok" required>
								</div>	
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Harga</label>
									<input type="number" class="form-control" name="harga" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Berat /Kg</label>
									<input type="text" class="form-control" name="berat" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Lokasi Produk</label>
									<input type="text" class="form-control" name="lokasi">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Gambar Produk</label>
								<input type="file" class="form-control" name="foto" accept="image/*">
							</div>
							<div class="form-group">
								<label class="control-label">Diskripsi Produk</label>
								<textarea class="form-control" id="deskripsi" name="diskripsi" required></textarea>
							</div>
							<button class="btn btn-primary float-right" name="simpan"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endpush

@push('script')
	$(document).ready(function() {
  $('#deskripsi').summernote();
});

@endpush


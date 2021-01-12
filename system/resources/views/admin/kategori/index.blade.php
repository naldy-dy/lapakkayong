@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
				<div class="card-header">
					<strong>Data Kategori</strong>
					<a href="{{url('admin/kategori/create-kategori')}}" class="btn btn-sm btn-primary tombol"><i class="fa fa-plus"></i> Tambah Kategori</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead class="bg-primary">
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Gambar</th>
						</thead>
						<tbody>
							@foreach($list_kategori as $kategori)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group form-inline">
											<a href="{{url('kategori', $kategori->id)}}/edit-kategori" class="btn btn-danger"><i class="fa fa-edit"></i></a>
											
											<form action="{{url('kategori', $kategori->id)}}" method="post" class="btn-group"onclick="return confirm('yakin ingin menghapus data ini?')">
												@csrf
												@method("delete")
												<button class="btn btn-success"><i class="fa fa-trash-o"></i></button>
											</form>

									</div>
								</td>
								<td>{{$kategori->nama}}</td>
								<td>Null</td>
							</tr>
							@endforeach
					</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@inject('timeService', 'App\Services\TimeServices')

@extends('dashboard.penjual.template.base')

@section('content')


	<div class="row">
		<div class="card">
			<div class="card-header">
				<div class="float-right" style="float: right;">
					Jam :  {{$timeService->showTimeNow()}}
				</div>
				Filter
			</div>
			<div class="card-body">

				<!-- Pencarrian -->
				<form action="{{url('penjual/produk/filter')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$nama ?? ''}}">
					</div>
					<div class="form-group">
						<label for="" class="control-label">Stok</label>
						<input type="number" name="stok" class="form-control" value="{{$stok ?? ''}}">
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="" class="control-label">Harga Min</label>
							<input type="number" name="harga_min" class="form-control" value="{{$harga_min ?? ''}}">
						</div>
						<div class="col-md-6">
							<label for="" class="control-label">Harga Max</label>
							<input type="number" name="harga_max" class="form-control" value="{{$harga_max ?? ''}}">
						</div>	
					</div>
					<button  class="btn btn-sm btn-primary tombol"><i class="fa fa-search"></i> Filter</button>
				</form>
				<!-- End pencarian -->
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="row">
				<div class="card-header">
					<strong>Data Produk</strong>
					<a href="{{url('penjual/penjual-create')}}" class="btn btn-sm btn-primary tombol"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead class="bg-primary">
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Lokasi</th>
							<th>Gambar</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group form-inline">
											<a href="{{url('penjual/penjual-show', $produk->uuid)}}" class="btn btn-warning"><i class="fa fa-info"></i></a>
											<a href="{{url('penjual/penjual-edit', $produk->uuid)}}/edit" class="btn btn-danger"><i class="fa fa-edit"></i></a>
										@include('dashboard.penjual.template.utils.delete', ['url' =>url('penjual-delete', $produk->uuid)])
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
								<td>{{$produk->lokasi}}</td>
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
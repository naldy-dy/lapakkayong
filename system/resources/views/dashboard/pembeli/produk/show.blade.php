@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Detail Produk</strong>
					</div>
					<div class="card-body container-fluid">
							<h3>{{$produk->nama}}</h3>  <hr style="border: 1px solid #444444">
						<div class="col-md-6 row">
						@include('admin.produk.show.detail')
						<div class="box">
							<div class="card row">
								<div class="col-md-12">
									<div class="card-body">
									<strong class="mt-5">Diskripsi Produk :</strong> <hr style="border: 1px solid #c0c0c0">
									<p>
										{!!nl2br($produk->diskripsi)!!}
									</p>	
									</div>
								</div>
								
								
							</div>
						</div>
						</div>
						<div class="col-md-6 text-center">
									<img src="{{url("public/$produk->foto")}}" alt="{{$produk->foto}}" width="50%">
								</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
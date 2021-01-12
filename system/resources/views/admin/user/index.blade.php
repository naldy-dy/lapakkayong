@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
				<div class="card-header">
					<strong>Data User</strong>
					<a href="{{url('admin/user/create')}}" class="btn btn-sm btn-primary tombol"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead class="bg-primary">
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Email</th>
							<th>Jenis Kelamin</th>
							<th>Foto Profil</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group form-inline">
											<a href="{{url('admin/user', $user->id)}}" class="btn btn-warning"><i class="fa fa-info"></i></a>
											<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-danger"><i class="fa fa-edit"></i></a>
										@include('admin.template.utils.delete', ['url' =>url('admin/user/', $user->id)])
									</div>
								</td>
								<td>{{ucwords($user->nama)}}</td>
								<td>{{ucwords($user->username)}}</td>
								<td>{{ucwords($user->email)}}</td>
								<td>{{$user->jenis_kelamin_string}}</td>
								<td>{{ucwords($user->profil)}}</td>
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
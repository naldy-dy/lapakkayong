@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Data User</strong>

					</div>
					<div class="card-body container-fluid">
					<h3>{{ucwords($user->nama)}}</h3> 
					 <hr style="border: 1px solid #444444">

						<table class="table">
							<tr>
								<th width="200px">Nama</th>
								<th>:</th>
								<td>{{ucwords($user->nama)}}</td>
							</tr>
							<tr>
								<th>User Name</th>
								<th>:</th>
								<td>{{ucwords($user->username)}}</td>
							</tr>
							<tr>
								<th>Email</th>
								<th>:</th>
								<td>{{ucwords($user->email)}}</td>
							</tr>
							<tr>
								<th>Tempat Lahir</th>
								<th>:</th>
								<td>{{ucwords($user->tmptlahir)}}</td>
							</tr>
							<tr>
								<th>Tanggal Lahir</th>
								<th>:</th>
								<td>{{$user->tgllahir}}</td>
							</tr>
							<tr>
								<th>No Handphone</th>
								<th>:</th>
								<td></td>
							</tr>
							<tr>
								<th>Password</th>
								<th>:</th>
								<td>{{$user->password}}</td>
							</tr>
						</table>
						<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Data</a>

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection